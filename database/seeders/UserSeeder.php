<?php

namespace Database\Seeders;

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
        /*User::create([
            "firstname" => "Aboubakary",
            "lastname" => "Cissé",
            "gender" =>
        ]);*/
    }
}
