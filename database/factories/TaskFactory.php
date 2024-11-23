<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(), 
            'description' => $this->faker->sentence(10), 
            'icon' => $this->faker->randomElement(['coffee', 'clock', 'bubble', 'lifting', 'books']), 
            'status' => $this->faker->randomElement(["In_Progress", "Completed", "Wont_do"]), 
            'user_id' => User::factory()
        ];
    }
}
