<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\AttributeType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attribute>
 */
class AttributeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $logicalAttributes = $this->generateLogicalAttributes();
        $attribute = fake()->randomElement($logicalAttributes);

        return [
            'name' => $attribute['name'],
            'type' => $attribute['type'],
        ];
    }

    private function generateLogicalAttributes(): array
    {
        $logicalAttributes = [];

        $possibleAttributeNames = [
            AttributeType::TEXT => ['description', 'comment'],
            AttributeType::NUMBER => ['estimated_hours', 'actual_hours'],
            AttributeType::DATE => ['due_date', 'start_date', 'end_date'],
            AttributeType::SELECT => ['department', 'priority', 'accounting_key', 'sprint'],
        ];

        foreach ($possibleAttributeNames as $type => $names) {
            foreach ($names as $name) {
                $logicalAttributes[] = [
                    'name' => $name,
                    'type' => $type,
                ];
            }
        }

        return $logicalAttributes;
    }
}
