<?php

namespace Database\Seeders;

use App\Models\Charcoal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharcoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $charcoals = [
            [
                'name' => 'Vegetable'
            ],
            [
                'name' => 'Mineral'
            ],
            [
                'name' => 'Candy'
            ]
        ];

        foreach ($charcoals as $charcoal) {
            Charcoal::create($charcoal);
        }
    }
}
