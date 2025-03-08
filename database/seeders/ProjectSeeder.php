<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Timesheet;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nbProjects = $this->command->ask(
            'How many projects do you want to generate?',
            DatabaseSeeder::NB_PROJECTS,
        );

        $nbTimesheets = $this->command->ask(
            'How many timesheets do you want to generate for each user?',
            DatabaseSeeder::NB_TIMESHEETS,
        );

        Project::factory($nbProjects)->create();

        $this->assignProjectsAndTimesheetsToUsers(
            min(3, $nbProjects),
            min(1, $nbTimesheets)
        );
    }

    private function assignProjectsAndTimesheetsToUsers($nbProjects, $nbTimesheets): void
    {
        $allUsers = User::all();
        $allProjects = Project::all();

        $allUsers->each(function ($user) use ($allProjects, $nbProjects, $nbTimesheets) {
            $randomProjects = $allProjects->random($nbProjects);

            $user->projects()->attach($randomProjects);

            $randomProjects->each(function ($project) use ($user, $nbTimesheets) {
                $project->timesheets()->saveMany(
                    Timesheet::factory($nbTimesheets)->create([
                        'user_id' => $user->id,
                        'project_id' => $project->id,
                        'date' => now()->subDays(rand(1, 10)),
                    ])
                );
            });
        });
    }
}
