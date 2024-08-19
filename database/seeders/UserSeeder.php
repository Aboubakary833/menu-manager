<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Aboubakary Cissé',
            'email' => 'aboubakarycisse410@gmail.com',
            'phone' => '66292862',
            'role' => RoleEnum::getValue('ADMIN'),
            'password' => 'password',
        ]);
        $user->markEmailAsVerified();
        $user->markPhoneAsVerified();
    }
}
