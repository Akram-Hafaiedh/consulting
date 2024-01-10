<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conseil>
 */
class ConseilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'description' => fake()->paragraph,
            // 'icon' => fake()->randomElement(['livre-ouvert', 'sante', 'main']),
            // Assuming the 'type' field is a string that represents a category or similar
            // 'type' => fake()->randomElement(['santé', 'education', 'relation']),
        ];
    }
}
