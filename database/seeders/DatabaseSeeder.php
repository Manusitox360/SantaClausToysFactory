<?php

namespace Database\Seeders;

use App\Models\Kid;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Generate 20 kids
        Kid::factory(10)->create();
    }
}
