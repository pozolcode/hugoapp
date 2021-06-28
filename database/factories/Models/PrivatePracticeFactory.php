<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PrivatePractice;

class PrivatePracticeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PrivatePractice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address1' => $this->faker->streetAddress,
            'address2' => $this->faker->secondaryAddress,
            'state' => $this->faker->word,
            'zip' => $this->faker->postcode,
        ];
    }
}
