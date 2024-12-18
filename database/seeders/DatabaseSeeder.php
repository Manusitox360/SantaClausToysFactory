<?php

namespace Database\Seeders;

use App\Models\Toy;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\ToySeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\MinimumAgeSeeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call([
            MinimumAgeSeeder::class,
            ToySeeder::class
        ]);
    }
}