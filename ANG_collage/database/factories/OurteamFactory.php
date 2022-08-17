<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ourteam>
 */
class OurteamFactory extends Factory
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
            "email" => $this->faker->safeEmail,
            "contact" => $this->faker->phoneNumber,
            "designation" => $this->faker->name,
            "images" => $this->faker->image('images',150,150,null,false),
            "status" => $this->faker->randomElement(["1"]),
        ];
    }
}
