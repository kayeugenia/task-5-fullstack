<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(),
            'content' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
            'user_id' => User::factory(), // Use for method to create a new user and get its ID
            'category_id' => Category::factory(), // Use for method to create a new category and get its ID
        ];
    }
}
