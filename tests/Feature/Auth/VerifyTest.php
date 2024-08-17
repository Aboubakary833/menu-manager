<?php

use function Pest\Laravel\actingAs;

test('unverified user should have access to verify page', function() {
    $user = createUser();

    actingAs($user)
    ->get('verify')
    ->assertSuccessful();
});

test('verified user should not have access to verify page', function() {
    $user = createUser(true);

    actingAs($user)
    ->get('verify')
    ->assertRedirectToRoute('home');
});
