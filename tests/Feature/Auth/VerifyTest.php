<?php

use App\Models\User;
use App\Notifications\Auth\SendVerificationEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Support\Facades\{Event, Notification, URL};

use function Pest\Laravel\{actingAs, post};
use function PHPUnit\Framework\assertTrue;

it('has the verify notice page', function() {
	$user = createUser();

	actingAs($user)
		->get('verify')
		->assertViewIs('pages.auth.verify');
});

it('redirect to verify page for non verfied user', function() {
	$user = createUser();

	actingAs($user)
		->get('home')
		->assertRedirectToRoute('verification.notice');
});

it('send verification email to user after registration', function() {

	Event::fake();
	Notification::fake();
	post(
        'register',
        [
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => '@dh2dl_4id',
        ]
    );
	$user = User::where('email', 'johndoe@gmail.com')->first();
	Event::assertListening(Registered::class, SendEmailVerificationNotification::class);
	Event::assertDispatched(function(Registered $event) use ($user) {
		return $event->user->email === $user->email;
        Notification::assertSentTo($user, SendVerificationEmail::class);
	});
});

test('user email verification should succeed', function() {
	$user = createUser();
	$verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $user->id, 'hash' => sha1($user->email)]
    );
	actingAs($user)
	->get($verificationUrl)
	->assertRedirectToRoute('home');

	assertTrue($user->hasVerifiedEmail());
});
