<?php

namespace Database\Seeders;

use App\Enums\GenderEnum;
use App\Enums\RoleEnum;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::findByName(RoleEnum::getValue("SUPER_ADMIN"));
        $user = User::create([
            "firstname" => "Aboubakary",
            "lastname" => "Cissé",
            "gender" => GenderEnum::MAN,
            "email" => "aboubakarycisse410@gmail.com",
            "phone" => "66292862",
        ]);
    }
}
