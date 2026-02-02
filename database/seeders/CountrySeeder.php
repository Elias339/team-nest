<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $rawCountries = json_decode(
            File::get(database_path('data/countries.json')),
            true
        );

        $countries = [];
        foreach ($rawCountries as $c) {
            $countries[] = [
                'name' => $c['name'],
                'country_code' => $c['code'],
                'phone_code' => $c['countryCode']
            ];
        }

        DB::table('countries')->insert($countries);
    }
}
