<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(25),
            'description' => $this->faker->text(100),
            'contents' => $this->faker->text(100),
            'price_old' => random_int(500,5000),
            'price' => random_int(500,5000),
            'count' => random_int(1,10),
            'is_published' => $this->faker->boolean,
            'category_id' => Category::get()->random()->id,
            'group_id' => Group::get()->random()->id,
        ];
    }
}
