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
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence(),
            'toy_type_id' => $this->faker->numberBetween(1, 22),
            'minimum_age_id' => $this->faker->numberBetween(1, 6)
        ];
    }
}
