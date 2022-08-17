<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "auther" => $this->faker->Name(),
            "date" => $this->faker->date,
            "category" => $this->faker->name,
            "title" => $this->faker->name('blog'),
            "tags" => $this->faker->randomElement(['tags', 'tags' ,'tags']),
            // "title" => $this->faker->heading,
            "short_description" => $this->faker->text,
            "long_description" => $this->faker->text,
            "images" => $this->faker->image('images',150,150,null,false),
            "status" => $this->faker->randomElement(["1"])

        ];
    }
}
