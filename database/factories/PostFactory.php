<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'titre' => $this->faker->word(),
            'contenu' => $this->faker->paragraph(),
            'date'=>$this->faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
            'tag_id'=>Tag::pluck('id')->random(),
        ];
    }
}
