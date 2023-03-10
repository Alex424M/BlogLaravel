<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Post::class;
    public function definition()
    {
        return [
            'title'=>$this->faker->word,
            'content'=>fake()->text,
            'photo'=>fake()->imageUrl,
            'likes'=>$this->faker->randomDigit(),
            'category_id'=>Category::all()->random()->id
        ];
    }
}
