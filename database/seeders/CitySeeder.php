<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = ["Ouagadougou", "Bobo Dioulasso"];
        $country = Country::where("name", "Burkina Faso")->first();
        foreach ($cities as $city)
        {
            $city = (new City)->fill(["name" => $city]);
            $city->country_id = $country->id;
            $city->save();
        }
    }
}
