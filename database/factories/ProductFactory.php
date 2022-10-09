<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
        'name'=> $this->faker->name,
        'slug'=> $this->faker->slug,
        'Category_id'=>$this->faker->numberBetween(1,100),
        'price'=>$this->faker->numberBetween(1,10000)
        ];
    }
}
