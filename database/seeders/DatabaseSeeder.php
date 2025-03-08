<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public const NB_USERS = 10;
    public const NB_PROJECTS = 5;
    public const NB_TIMESHEETS = 3;
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

        $this->call([
            UserSeeder::class,
            ProjectSeeder::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
        ]);
    }
}
