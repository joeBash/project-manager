<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Timesheet;
use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public const NB_USERS = 10;
    public const NB_PROJECTS = 5;
    public const NB_ATTRIBUTES = 10;

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

        User::factory(DatabaseSeeder::NB_USERS - 1)->create();
        Project::factory(DatabaseSeeder::NB_PROJECTS)->create();

        $this->assignProjectsAndTimesheetsToUsers(min(3, DatabaseSeeder::NB_PROJECTS), 1);
        $this->seedUniqueAttributes(DatabaseSeeder::NB_ATTRIBUTES);

        $projects = Project::all();

        // TODO: find a more efficient way to assign attributes to projects
        Attribute::all()->each(function ($attribute) use ($projects) {
            $project = $projects->filter(function ($project) use ($attribute) {
                return !AttributeValue::where('attribute_id', $attribute->id)
                    ->where('project_id', $project->id)
                    ->exists();
            })->random();

            $attribute->attributeValues()->save(AttributeValue::factory()->create([
                'attribute_id' => $attribute->id,
                'project_id' => $project->id,
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
        // TODO: find a more efficient way to ensure uniqueness
        for ($i = 1; $i < $nbAttributes; $i++) {
            // loop until we have a new unique attribute to add
            do {
                $generatedAttribute = Attribute::factory()->make();

                $attributeAlreadyExists = Attribute::where('name', $generatedAttribute->name)
                    ->where('type', $generatedAttribute->type)
                    ->exists();
            } while ($attributeAlreadyExists);

            $generatedAttribute->save();
        }
    }
}
