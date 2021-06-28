<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Doctor;
use App\Models\Project;
use App\Models\ProjectStatus;

class ProjectStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProjectStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_id' => Doctor::factory(),
            'project_id' => Project::factory(),
            'status' => $this->faker->randomElement(["DONE","IN-PROGRESS","REJECTED"]),
        ];
    }
}
