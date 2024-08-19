<?php

use App\Enums\RoleEnum;
use App\Models\User;

use function Pest\Laravel\actingAs;

test('user should have access to the completion page', function() {
    $user = createUser(true);

    actingAs($user)
    ->get('complete')
    ->assertSuccessful()
    ->assertViewIs('pages.auth.complete');
});

test('user should not have access to the completion page', function() {
    $user = User::factory()->create(['role' => RoleEnum::getValue('CLIENT')]);

    actingAs($user)
    ->get('complete')
    ->assertRedirectToRoute('home');
});

test('user should be able to complete his information', function() {
    $user = createUser(true);

    actingAs($user)
    ->post(
        'complete',
        [
            'type' => '1',
        ]
    )
    ->assertStatus(302);
});
