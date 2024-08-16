<?php
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\{GoogleProvider, User};
use Mockery\MockInterface;

use function Pest\Laravel\get;
use function Pest\Laravel\withSession;
use function PHPUnit\Framework\assertTrue;

it('should redirect to google auth', function() {

	mock(GoogleProvider::class, function(MockInterface $mock) {

		$redirectUrl = 'https://redirect.url';

		$mock->shouldReceive('redirect')
		->andReturn(
			new RedirectResponse($redirectUrl)
		);

		Socialite::shouldReceive('driver')
		->andReturn($mock);

		get('oauth/redirect?type=login')
		->assertRedirect($redirectUrl);

		get('oauth/redirect?type=signup')
		->assertRedirect($redirectUrl);

	});

});

test('user should fail authenticating using google auth', function() {

	$socialiteUser = mock(User::class, function(MockInterface $mock) {
		$mock->shouldReceive('getEmail')
		->andReturn('johndoe@gmail.com');
	});

	Socialite::shouldReceive('driver->user')->andReturn($socialiteUser);

	withSession(['oauth_type', 'login'])
	->get('oauth/callback')
	->assertRedirectToRoute('login.view')
	->assertSessionHas('error', 'auth.oauth.failed');

});

test('user should be able to login using google auth', function() {

	$user = createUser(true);
	$socialiteUser = mock(User::class, function(MockInterface $mock) use($user) {
		$mock->shouldReceive('getEmail')
		->andReturn($user->email);
	});

	Socialite::shouldReceive('driver->user')->andReturn($socialiteUser);

	withSession(['oauth_type' => 'login'])
	->get('oauth/callback')
	->assertRedirectToRoute('home');
	
	assertTrue(auth()->check());
});

test('user should be able to register using google auth', function() {

	$socialiteUser = mock(User::class, function(MockInterface $mock) {
		$mock->shouldReceive('getEmail', 'getName')
		->andReturn('johndoe@gmail.com', 'John Doe');
	});

	Socialite::shouldReceive('driver->user')->andReturn($socialiteUser);

	withSession(['oauth_type' => 'signup'])
	->get('oauth/callback')
	->assertRedirectToRoute('home');

	assertTrue(auth()->check());

});
