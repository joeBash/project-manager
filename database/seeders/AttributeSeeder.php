<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nbAttributes = $this->command->ask(
            'How many attributes do you want to generate?',
            DatabaseSeeder::NB_ATTRIBUTES,
        );

        $this->seedUniqueAttributes($nbAttributes);
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
