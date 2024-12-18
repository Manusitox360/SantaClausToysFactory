<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Toy>
 */
class ToyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'picture' => $this->faker->imageUrl(640, 480, 'toys', true),
            'descreption' => $this->faker->sentence(),
            'min_age' => $this->faker->randomElement(['0', '+7', '+12']),
        ];
    }
}
