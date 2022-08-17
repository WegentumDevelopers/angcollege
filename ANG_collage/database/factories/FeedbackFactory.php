<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "Name" => $this->faker->Name(),
            "email" => $this->faker->email,
            "subject" => $this->faker->randomElement(["get wel soon"]),
            "message" => $this->faker->text,
            "status" => $this->faker->randomElement(["1"])
        ];
    }
}
