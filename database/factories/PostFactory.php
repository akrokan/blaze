<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(5, 7), true);
        $slug = Str::slug($title, '-');

        return [
//            'author' => $this->faker->userName(),
            'user_id' => rand(1,5),
            'title' => $title,
            'slug' => $slug,
            'content' => $this->faker->paragraphs(4, true),
            'online' => 1,
        ];
    }
}