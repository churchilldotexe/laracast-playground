<?php

namespace Database\Factories;

use App;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    public function definition(): array
    {

        return [
        'title' => fake()->jobTitle(),
        'employer_id' => App\Models\Employer::factory() ,
        'salary' => '50,000$'
        ];

    }
};
