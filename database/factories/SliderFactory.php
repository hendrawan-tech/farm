<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'badge' => $this->faker->text(255),
            'title' => $this->faker->sentence(10),
            'button' => $this->faker->text(255),
            'link' => $this->faker->text(255),
        ];
    }
}
