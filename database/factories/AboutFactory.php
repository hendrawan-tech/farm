<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            'description' => $this->faker->sentence(15),
            'sort_description' => $this->faker->text(255),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'link_tokped' => $this->faker->text(255),
            'link_shopee' => $this->faker->text(255),
            'link_wa' => $this->faker->text(255),
        ];
    }
}
