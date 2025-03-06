<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Timesheet;
use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Test user
        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
        ]);

        User::factory(9)->create();
        Project::factory(5)->create();


        $this->assignProjectsAndTimesheetsToUsers(3, 1);
        $this->seedUniqueAttributes(10); // respects integrety constraint on (name, type)

        $projects = Project::all();

        Attribute::all()->each(function ($attribute) use ($projects) {
            $attribute->values()->attach(AttributeValue::factory(5)->create([
                'attribute_id' => $attribute->id,
                'project_id' => $projects->random()->id,
            ]));
        });
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

    private function seedUniqueAttributes(int $nbAttributes)
    {
        $attributes = [];

        for ($i = 0; $i < $nbAttributes; $i++) {
            // loop until we have a new unique attribute to add
            do {
                $generatedAttribute = Attribute::factory()->create();
            } while (in_array($generatedAttribute, $attributes, true));

            $attributes[] = $generatedAttribute;
        }
    }
}
