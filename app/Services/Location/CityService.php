<?php

declare(strict_types=1);

namespace App\Services\Location;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class CityService
{
    public function getForCountry(string $name, bool $cached = true) : Collection
    {
        if (!$cached)
            return $this->filterCities(collect($this->queryCitiesOf($name)));
        $cacheName = "cities_of_" . Str::snake(Str::lower($name));
        $cities = Cache::remember(
            $cacheName,
            now()->addYear(),
            fn() => $this->queryCitiesOf($name)
        );
        return $this->filterCities(collect($cities));
    }

    protected function queryCitiesOf(string $name) : array
    {
        $response = Http::countriesNowApi()->post("countries/cities", [
            "country" => $name
        ]);
        if (!$response->ok())
            return [];
        $responseData = $response->json();
        return $responseData["data"];
    }

    protected function filterCities(Collection $cities) : Collection
    {
        return $cities->filter(function(string $city) {
            return !Str::startsWith($city, "Province");
        });
    }
}
