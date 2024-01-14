<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz>
 */
class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $types = ['santé', 'éducation', 'relationnel',];

        return [
            'title' => fake()->sentence(),
            'type' => fake()->randomElement($types),
            'description' => fake()->sentence(),
            'time' => fake()->numberBetween(1, 10),
            // 'user_id' => fake()->numberBetween(1, 10),
        ];
    }
}
