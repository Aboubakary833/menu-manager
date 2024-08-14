<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::findByName(RoleEnum::getValue('SUPER_ADMIN'));
        $user = User::create([
            'name' => 'Aboubakary Cissé',
            'email' => 'aboubakarycisse410@gmail.com',
            'phone' => '66292862',
            'password' => 'password',
        ]);
        $user->assignRole($role);
        $user->markEmailAsVerified();
        $user->markPhoneAsVerified();
    }
}
