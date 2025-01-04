<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trips = [
            [
                'name' => 'Disneyland'
            ],
            [
                'name' => 'Warner Bros'
            ],
            [
                'name' => 'The Moon'
            ]
        ];

        foreach ($trips as $trip) {
            Trip::create($trip);
        }
    }
}
