<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enquiry>
 */
class EnquiryFactory extends Factory
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
            "contact" => $this->faker->phoneNumber,
            "message" => $this->faker->text,

            "status" => $this->faker->randomElement(["1"])
        ];
    }
}
