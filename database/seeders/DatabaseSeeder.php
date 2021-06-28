<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Doctor::factory(10)->create();
        \App\Models\PrivatePractice::factory(10)->create();
        \App\Models\PublicPractice::factory(10)->create();
        \App\Models\Project::factory(10)->create();
        \App\Models\ProjectStatus::factory(10)->create();
        \App\Models\UserApp::factory(10)->create();
        \App\Models\Questionnaire::factory(10)->create();
    }
}
