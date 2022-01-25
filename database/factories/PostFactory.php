<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // create faker for title and body
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,

            // 'title' => this->faker->words(3, true);
            // 'body' => this->faker->paragraphs(3, true);
        ];
    }
}
