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
                    'age' => "+0"
                ],
                [
                    'age' => "0-3 years old"
                ],
                [
                    'age' => "3-7 years old"
                ],
                [
                    'age' => "7-12 years old"
                ],
                [
                    'age' => "12-16 years old"
                ],
                [
                    'age' => "16-18 years old"
                ],
                [
                    'age' => "+18"
                ]
                ];

        foreach ($ages as $age) {
            MinimumAge::create($age);
        }
    }
}
