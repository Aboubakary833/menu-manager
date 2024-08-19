<?php

use function Pest\Laravel\actingAs;
use function Pest\Laravel\{get, post};

it('has register page', function () {
    
    get('register')
    ->assertSuccessful()
    ->assertViewIs('pages.auth.register');
});

test('authenticated user cannot access the register page', function() {

    $user = createUser(true);

    actingAs($user)
    ->get('register')
    ->assertRedirectToRoute('home');
});

test('user registration should succeed', function() {

    post(
        'register',
        [
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => '@dh2dl_4id',
        ]
    )->assertRedirectToRoute('verification.notice');
});

test('user registration should fail', function() {
    createUser();
    
    post(
        'register',
        [
            'name' => 'Johnathan Leroix',
            'email' => 'johndoe@gmail.com',
            'password' => '@test4test_',
        ]
    )->assertStatus(302)
    ->assertSessionHasInput('email')
    ->assertSessionHasErrors('email');
});
