<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Preference>
 */
class PreferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'notify_emails' => fake()->boolean(),
            'notify' => fake()->boolean(),
            'description' => fake()->paragraph(),
            'title' => fake()->title(),
            'difficult' => fake()->randomElement(['Easy','Medium','Hard']),
            'address' => fake()->address(),
            'number' => fake()->unique()->numberBetween(1,50),
        ];
    }
}
