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
        $paragraphs = rand(5, 13);
        $i = 0;
        $ret = "";
        while ($i < $paragraphs) {
            $ret .= "<div>" . $this->faker->paragraph(rand(4, 9)) . "</div>" . "<br>";
            $i++;
        }

        return [
            'title' => fake()->sentence(3),
            'body' => $ret,
            'category_id' => mt_rand(1, 5)
        ];
    }
}
