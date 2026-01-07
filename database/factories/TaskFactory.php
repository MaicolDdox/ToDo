<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->text(),
            'priority' => fake()->randomElement(["low","medium","high"]),
            'status' => fake()->randomElement(["pending","in_progress","done"]),
            'due_date' => fake()->date(),
            'tags' => fake()->regexify('[A-Za-z0-9]{255}'),
        ];
    }
}
