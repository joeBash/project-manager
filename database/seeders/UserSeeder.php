<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nbUsers = $this->command->ask(
            'How many users do you want to generate?',
            DatabaseSeeder::NB_USERS,
        );

        // -1 to account for the test user which is created in DatabaseSeeder
        User::factory($nbUsers - 1)->create();
    }
}
