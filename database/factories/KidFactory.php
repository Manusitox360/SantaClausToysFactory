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
            'image' => $this->faker->imageUrl(),
            'age' => $this->faker->numberBetween(1, 25),
            'attitude' => $this->faker->numberBetween(0, 1),
            'gender_id' => $this->faker->numberBetween(1, 2),
            'country_id' => $this->faker->numberBetween(1, 25)
        ];
    }
}
