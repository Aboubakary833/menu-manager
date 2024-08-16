<?php
use function Pest\Laravel\{actingAs, get, post};

it('has login page', function() {
    get('login')
    ->assertSuccessful()
    ->assertViewIs('pages.auth.login');
});

test('authenticated user cannot access login page', function() {
    $user = createUser(true);

    actingAs($user)
    ->get('login')
    ->assertRedirectToRoute('home');
});

test('user should fail login using email and password', function() {
    createUser();

    post(
        'login',
        [
            'email' => 'johndoe@gmail.com',
            'password' => '1234'
        ]
    )->assertStatus(302)
    ->assertSessionHas('error', __('auth.failed'));
});

test('user should successfully log in using email and password', function() {
    createUser(true);

    post(
        'login',
        [
            'email' => 'johndoe@gmail.com',
            'password' => 'password'
        ]
    )->assertStatus(302);
});

test('authenticated user should be able to log out', function() {
    $user = createUser(true);

    actingAs($user)
        ->post('logout')
        ->assertRedirectToRoute('login.view');
});