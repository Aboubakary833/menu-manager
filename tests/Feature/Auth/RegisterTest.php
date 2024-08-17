<?php

use function Pest\Laravel\actingAs;
use function Pest\Laravel\{get, post};

it('has register page', function () {
    
    get('register')
    ->assertSuccessful();
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
    );
});
