<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {
        $user = User::all()->random();

        while(count($user->category) == 0) {
            $user = User::all()->random();
        }

        return [
            'title' => fake()->name(),
            'description' => fake()->text(100),
            'user_id' =>$user,
            'category_id' => $user->category->random(),
        ];
    }
}
