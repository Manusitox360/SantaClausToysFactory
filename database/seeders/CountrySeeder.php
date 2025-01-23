<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'name' => 'United States'
            ],
            [
                'name' => 'Canada'
            ],
            [
                'name' => 'Mexico'
            ],
            [
                'name' => 'Argentina'
            ],
            [
                'name' => 'Brazil'
            ],
            [
                'name' => 'United Kingdom'
            ],
            [
                'name' => 'France'
            ],
            [
                'name' => 'Germany'
            ],
            [
                'name' => 'Italy'
            ],
            [
                'name' => 'Spain'
            ],
            [
                'name' => 'Australia'
            ],
            [
                'name' => 'China'
            ],
            [
                'name' => 'India'
            ],
            [
                'name' => 'Japan'
            ],
            [
                'name' => 'Russia'
            ],
            [
                'name' => 'South Korea'
            ],
            [
                'name' => 'South Africa'
            ],
            [
                'name' => 'Egypt'
            ],
            [
                'name' => 'Saudi Arabia'
            ],
            [
                'name' => 'Turkey'
            ],
            [
                'name' => 'Indonesia'
            ],
            [
                'name' => 'Thailand'
            ],
            [
                'name' => 'Nigeria'
            ],
            [
                'name' => 'Kenya'
            ],
            [
                'name' => 'Colombia'
            ],
            [
                'name' => 'Chile'
            ],
            [
                'name' => 'Peru'
            ]
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
