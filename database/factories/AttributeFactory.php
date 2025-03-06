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

    public static function getExampleAttributeNames(): array
    {
        return [
            ['description', 'comment'],                                 // AttributeType::TEXT
            ['due_date', 'start_date', 'end_date'],                     // AttributeType::DATE
            ['estimated_hours', 'actual_hours'],                        // AttributeType::NUMBER
            ['department', 'priority', 'accounting_key', 'sprint'],     // AttributeType::SELECT
        ];
    }

    private function generateLogicalAttributes(): array
    {
        $logicalAttributes = [];

        $possibleAttributeNames = array_combine(AttributeType::values(), $this->getExampleAttributeNames());

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
