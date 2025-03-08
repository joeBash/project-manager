<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeValueSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
}
