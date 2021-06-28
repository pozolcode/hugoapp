<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Questionnaire;

class QuestionnaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Questionnaire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'questions' => '{}',
            'payment_status' => $this->faker->sha256,
            'status' => $this->faker->randomElement(["DONE","IN-PROGRESS","REJECTED"]),
        ];
    }
}
