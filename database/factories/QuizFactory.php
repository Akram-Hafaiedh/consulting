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
        return [
            'title' => fake()->sentence(),
            'type' => fake()->sentence(),
            'description' => fake()->sentence(),
            'time' => fake()->numberBetween(1, 10),
            'number_of_questions' => fake()->numberBetween(1, 10),
            'number_of_correct_answers' => fake()->numberBetween(1, 10),
            'active' => fake()->boolean(),
            // 'user_id' => fake()->numberBetween(1, 10),
        ];
    }
}
