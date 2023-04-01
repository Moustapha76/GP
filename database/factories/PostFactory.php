<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $post = Post::class;
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'tel' => $this->faker->e164PhoneNumber,
            'price' => $this->faker->biasedNumberBetween($min = 50, $max = 90, $function = 'sqrt'),
            'depart' => $this->faker->city,
            'arrival' => $this->faker->city,
            'picture' => $this->faker->imageUrl($width=400, $height=400, 'cats'),
            'jour' => $this->faker->date,
        ];
    }
}
