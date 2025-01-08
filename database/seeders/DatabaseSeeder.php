<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\ToySeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\TripSeeder;
use Database\Seeders\GenderSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\CountrySeeder;
use Database\Seeders\ToyTypeSeeder;
use Database\Seeders\CharcoalSeeder;
use Database\Seeders\PlaythingSeeder;
use Database\Seeders\MinimumAgeSeeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call([
            MinimumAgeSeeder::class,
            PlaythingSeeder::class,
            TripSeeder::class,
            CharcoalSeeder::class,
            ToyTypeSeeder::class,
            ToySeeder::class,
            CountrySeeder::class,
            GenderSeeder::class
        ]);
    }
}