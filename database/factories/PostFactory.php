<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {

        return [
            'title' => $this->faker->sentence(3),
            'excerpt' => $this->faker->sentence(25),
            //'body' => collect($this->faker->sentences(5))->implode('\n'), //generate 5 sentences and glue them into a single string
            'body' => implode('\n', $this->faker->sentences(5)),
            'author_id' => 1,
            'category_id' => 1,
            'publish_date' => Carbon::now(),
        ];
    }
}
