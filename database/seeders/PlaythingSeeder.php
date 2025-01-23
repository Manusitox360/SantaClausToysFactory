<?php

namespace Database\Seeders;

use App\Models\Plaything;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaythingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $playthings = [
            [
                'name' => 'Baby Toy'
            ],
            [
                'name' => 'Plush Toy'
            ],
            [
                'name' => "Children's Books"
            ],
            [
                'name' => 'Building Blocks'
            ],
            [
                'name' => 'Interactive Toy'
            ],
            [
                'name' => 'Teething Toy'
            ],
            [
                'name' => 'LEGO'
            ],
            [
                'name' => 'Board Game'
            ],
            [
                'name' => 'Experiment Kit'
            ],
            [
                'name' => 'Puzzle'
            ],
            [
                'name' => 'Craft Materials'
            ],
            [
                'name' => 'Sports'
            ],
            [
                'name' => 'Tech Toy'
            ],
            [
                'name' => 'Robotics Kit'
            ],
            [
                'name' => 'Video Games'
            ],
            [
                'name' => 'Musical Instrument'
            ],
            [
                'name' => 'Youth Books'
            ]
        ];

        foreach ($playthings as $plaything) {
            Plaything::create($plaything);
        }
    }
}
