<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sections = Section::all('id');

        return [
            'title' => $this->faker->realTextBetween(20, 100, 2),
            'article' => $this->faker->realTextBetween(300, 1500, 2),
            'section_id' => $this->faker->randomElement($sections),
        ];
    }
}
