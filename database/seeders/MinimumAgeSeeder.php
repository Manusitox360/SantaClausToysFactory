<?php

namespace Database\Seeders;

use App\Models\MinimumAge;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MinimumAgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ages = [
                    [
                        'min' => 0,
                        'max' => 3
                    ],
                    [
                        'min' => 3,
                        'max' => 7
                    ],
                    [
                        'min' => 7,
                        'max' => 12
                    ],
                    [
                        'min' => 12,
                        'max' => 16
                    ],
                    [
                        'min' => 16,
                        'max' => 18
                    ],
                    [
                        'min' => 18,
                        'max' => null
                    ],
                    [
                        'min' => 0,
                        'max' => null
                    ]
                ];

        foreach ($ages as $age) {
            MinimumAge::create($age);
        }
    }
}
