<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\MinimumAgeSeeder;
use Database\Seeders\PlaythingSeeder;
use Database\Seeders\TripSeeder;
use Database\Seeders\CharcoalSeeder;
use Database\Seeders\ToyTypeSeeder;
use Database\Seeders\ToySeeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call([
            MinimumAgeSeeder::class,
            PlaythingSeeder::class,
            TripSeeder::class,
            CharcoalSeeder::class,
            ToyTypeSeeder::class,
            ToySeeder::class
        ]);
    }
}