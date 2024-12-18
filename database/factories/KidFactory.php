<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kid>
 */
class KidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'foto' => $this->faker->imageUrl(640, 480, 'kids', true),
            'age' => $this->faker->numberBetween(1, 15),
            'gender' => $this->faker->randomElement(['boy', 'girl']),
            'atitude' => $this->faker->randomElement(['good', 'bad']),
        ];
    }
}
