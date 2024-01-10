<?php

declare(strict_types=1);

namespace App\Services\Location;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class CountryService
{

    public function getAll(bool $cached = true) : Collection
    {
        if (!$cached)
            return collect($this->queryAll());
        $allCountries = Cache::rememberForever("all_countries", fn() => $this->queryAll());
        return collect($allCountries);
    }

    public function queryAll(
        bool $withFlag = true,
        bool $withDialCode = true,
        bool $withCurrency = true,
        bool $withIsoCode = true,
    ): array
    {
        $path = "countries";
        $query = [];
        $queryString = $this->composeQuery(...func_get_args());

        if ($queryString)
        {
            $path .= "/info";
            $query = ["returns" => $queryString];
        }

        $response = Http::countriesNowApi()->get($path, $query);
        if (!$response->ok())
            return [];
        $responseData = $response->json();
        return $responseData["data"];
    }

    public function findByName(string $name)
    {
        return $this->getAll()->where("name", $name)->first();
    }

    public function findByIsoCode(string $code)
    {
        return $this->getAll()->where("iso2", $code)->first();
    }

    protected function composeQuery(
        bool $withFlag = true,
        bool $withDialCode = true,
        bool $withCurrency = true,
        bool $withIsoCode = true
    ) : string | null {
        $queryParams = [
            $withCurrency ? "currency" : '',
            $withFlag ? "flag" : '',
            $withDialCode ? "dialCode" : '',
            $withIsoCode ? "iso2" : ''
        ];
        $queryParams = array_filter($queryParams, fn(string $value) => $value);

        if (!count($queryParams))
            return null;
        return implode(",", $queryParams);
    }

}
