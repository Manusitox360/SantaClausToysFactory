<?php

namespace Database\Seeders;

use App\Models\ToyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toyTypes = [
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 1
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 2
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 3
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 4
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 5
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 6
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 7
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 8
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 9
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 10
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 11
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 12
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 13
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 14
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 15
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 16
            ],
            [
                'associated_type' => 'App\Models\Plaything',
                'associated_id' => 17
            ],
            [
                'associated_type' => 'App\Models\Trip',
                'associated_id' => 1
            ],
            [
                'associated_type' => 'App\Models\Trip',
                'associated_id' => 2
            ],
            [
                'associated_type' => 'App\Models\Charcoal',
                'associated_id' => 1
            ],
            [
                'associated_type' => 'App\Models\Charcoal',
                'associated_id' => 2
            ],
            [
                'associated_type' => 'App\Models\Charcoal',
                'associated_id' => 3
            ],
            [
                'associated_type' => 'App\Models\Trip',
                'associated_id' => 3
            ],
        ];

        foreach ($toyTypes as $toyType) {
            ToyType::create($toyType);
        }
    }
}
