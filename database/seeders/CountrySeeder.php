<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Services\Location\CountryService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function __construct(
        public CountryService $service
    ) {}
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countriesIsoCodes = ["BF", "CI", "ML", "SN"];
        foreach ($countriesIsoCodes as $code)
        {
            $countryData = $this->service->findByIsoCode($code);
            Country::create([
                "name" => $countryData["name"],
                "dial_code" => $countryData["dialCode"],
                "iso2_code" => $countryData["iso2"],
                "flag" => $countryData["flag"],
                "currency" => $countryData["currency"],
            ]);
        }
    }
}
