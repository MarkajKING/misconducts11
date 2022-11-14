<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Confidant>
 */
class ConfidantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),

            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->word,
            'age' => $this->faker->randomDigitNotNull,
            'background' => $this->faker->word,
            'email' => $this->faker->email,
            'phone_number' => $this->faker->phoneNumber,

            'excerpt' => $this->faker->sentence,
            'about' => $this->faker->text,
            'experiences' => $this->faker->text,
            'motto' => $this->faker->sentence,

        ];
    }
}
