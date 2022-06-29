<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->unique()->catchPhrase(),
            'slug' => $this->faker->slug($name),
            'description' => $this->faker->realText(),
            'image_url' => $this->faker->imageUrl(),
            'qty' => $this->faker->randomDigitNotNull(),
            'featured' => $this->faker->boolean(),
            'is_visible' => $this->faker->boolean(),
            'price' => $this->faker->randomFloat(2, 80, 400),
            'published_at' => $this->faker->dateTimeBetween('-1 year', '+1 year'),
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-6 month'),
            'updated_at' => $this->faker->dateTimeBetween('-5 month', 'now'),
        ];
    }
}
