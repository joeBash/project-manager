<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Attribute;
use App\Models\Project;
use Database\Seeders\DatabaseSeeder;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AttributeValue>
 */
class AttributeValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $countOfAttributes = Attribute::all()->count();

        $attribute = Attribute::findOrNew(
            fake()->randomElement(range(1, $countOfAttributes))
        )->first();

        return [
            'value' => $this->fakeAppropriateValue($attribute),
            'attribute_id' => $attribute->id,
            'project_id' => Project::factory()->create()->id,
        ];
    }

    private function fakeAppropriateValue(Attribute $attribute): mixed
    {
        return match ($attribute->type) {
            'DATE' => fake()->date(),
            'NUMBER' => fake()->randomFloat(2, 0, 1000),
            default => fake()->word(),
        };
    }
}
