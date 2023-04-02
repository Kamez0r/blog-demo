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
        $excerpt = $this->faker->sentence(20);

        $body = [
            $excerpt,
            $this->faker->sentence(25),
            $this->faker->sentence(35),
            $this->faker->sentence(20),
            $this->faker->sentence(15),
        ];

        $body = implode("\n", $body);

        return [
            'title' => $this->faker->sentence(3),
            'excerpt' => $excerpt,
            'body' => $body,
            'author_id' => 1,
            'publish_date' => Carbon::now(),
        ];
    }
}
