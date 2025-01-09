<?php

use App\Models\Kid;
use Illuminate\Database\Seeder;

class KidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kids = [
            [
                'name' => 'Pablo',
                'surname' => 'Alvarez',
                'image' => 'https://randomuser.me/api/portraits/men/1.jpg',
                'age' => 10,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 1
            ],
            [
                'name' => 'Ana',
                'surname' => 'García',
                'image' => 'https://randomuser.me/api/portraits/women/2.jpg',
                'age' => 8,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 2
            ],
            [
                'name' => 'Carlos',
                'surname' => 'Martínez',
                'image' => 'https://randomuser.me/api/portraits/men/3.jpg',
                'age' => 15,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 3
            ],
            [
                'name' => 'Lucía',
                'surname' => 'López',
                'image' => 'https://randomuser.me/api/portraits/women/4.jpg',
                'age' => 9,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 4
            ],
            [
                'name' => 'Miguel',
                'surname' => 'Sánchez',
                'image' => 'https://randomuser.me/api/portraits/men/5.jpg',
                'age' => 18,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 5
            ],
            [
                'name' => 'Sofía',
                'surname' => 'Pérez',
                'image' => 'https://randomuser.me/api/portraits/women/6.jpg',
                'age' => 7,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 6
            ],
            [
                'name' => 'Diego',
                'surname' => 'Gómez',
                'image' => 'https://randomuser.me/api/portraits/men/7.jpg',
                'age' => 10,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 7
            ],
            [
                'name' => 'María',
                'surname' => 'Rodríguez',
                'image' => 'https://randomuser.me/api/portraits/women/8.jpg',
                'age' => 20,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 8
            ],
            [
                'name' => 'Javier',
                'surname' => 'Fernández',
                'image' => 'https://randomuser.me/api/portraits/men/9.jpg',
                'age' => 12,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 9
            ],
            [
                'name' => 'Elena',
                'surname' => 'Ruiz',
                'image' => 'https://randomuser.me/api/portraits/women/10.jpg',
                'age' => 9,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 10
            ],
            [
                'name' => 'Luis',
                'surname' => 'Hernández',
                'image' => 'https://randomuser.me/api/portraits/men/11.jpg',
                'age' => 11,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 11
            ],
            [
                'name' => 'Isabel',
                'surname' => 'Díaz',
                'image' => 'https://randomuser.me/api/portraits/women/12.jpg',
                'age' => 7,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 12
            ],
            [
                'name' => 'Fernando',
                'surname' => 'Moreno',
                'image' => 'https://randomuser.me/api/portraits/men/13.jpg',
                'age' => 10,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 13
            ],
            [
                'name' => 'Laura',
                'surname' => 'Muñoz',
                'image' => 'https://randomuser.me/api/portraits/women/14.jpg',
                'age' => 8,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 14
            ],
            [
                'name' => 'Raúl',
                'surname' => 'Romero',
                'image' => 'https://randomuser.me/api/portraits/men/15.jpg',
                'age' => 17,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 15
            ],
            [
                'name' => 'Carmen',
                'surname' => 'Alonso',
                'image' => 'https://randomuser.me/api/portraits/women/16.jpg',
                'age' => 9,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 16
            ],
            [
                'name' => 'Antonio',
                'surname' => 'Gutiérrez',
                'image' => 'https://randomuser.me/api/portraits/men/17.jpg',
                'age' => 11,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 17
            ],
            [
                'name' => 'Marta',
                'surname' => 'Jiménez',
                'image' => 'https://randomuser.me/api/portraits/women/18.jpg',
                'age' => 7,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 18
            ],
            [
                'name' => 'Juan',
                'surname' => 'Ruiz',
                'image' => 'https://randomuser.me/api/portraits/men/19.jpg',
                'age' => 10,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 19
            ],
            [
                'name' => 'Clara',
                'surname' => 'Torres',
                'image' => 'https://randomuser.me/api/portraits/women/20.jpg',
                'age' => 8,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 20
            ],
            [
                'name' => 'Pedro',
                'surname' => 'Navarro',
                'image' => 'https://randomuser.me/api/portraits/men/21.jpg',
                'age' => 12,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 21
            ],
            [
                'name' => 'Rosa',
                'surname' => 'Ramos',
                'image' => 'https://randomuser.me/api/portraits/women/22.jpg',
                'age' => 9,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 22
            ],
            [
                'name' => 'Hugo',
                'surname' => 'Gil',
                'image' => 'https://randomuser.me/api/portraits/men/23.jpg',
                'age' => 23,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 23
            ],
            [
                'name' => 'Alicia',
                'surname' => 'Castro',
                'image' => 'https://randomuser.me/api/portraits/women/24.jpg',
                'age' => 7,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 24
            ],
            [
                'name' => 'Manuel',
                'surname' => 'Vargas',
                'image' => 'https://randomuser.me/api/portraits/men/25.jpg',
                'age' => 10,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 25
            ],
            [
                'name' => 'Patricia',
                'surname' => 'Cabrera',
                'image' => 'https://randomuser.me/api/portraits/women/26.jpg',
                'age' => 8,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 26
            ],
            [
                'name' => 'José',
                'surname' => 'Flores',
                'image' => 'https://randomuser.me/api/portraits/men/27.jpg',
                'age' => 19,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 27
            ],
            [
                'name' => 'Teresa',
                'surname' => 'Soto',
                'image' => 'https://randomuser.me/api/portraits/women/28.jpg',
                'age' => 9,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 1
            ]
        ];

        foreach ($kids as $kid) {
            Kid::create($kid);
        }
    }
}