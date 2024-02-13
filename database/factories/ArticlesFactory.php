<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articles>
 */
class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(50),
            'preview' => $this->faker->text(120),
            'text' => $this->faker->text(),
            'author' => $this->faker->name(),
            'from_categories' => rand(1, 10),
            'date' => date('Y-m-d h:i:s')

        ];
    }
}
