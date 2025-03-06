<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timesheet>
 */
class TimesheetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task_name' => str_replace('.', '', fake()->sentence(4)),
            'date' => fake()->date(),
            'hours' => fake()->randomFloat(2, 0, 40),
            'user_id' => User::factory(),
            'project_id' => Project::factory(),
        ];
    }
}
