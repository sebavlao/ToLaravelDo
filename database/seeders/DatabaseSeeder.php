<?php

namespace Database\Seeders;

use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Task::factory(4)->create();

        User::factory()->create([
            'name' => 'Sebastian Videla',
            'email' => 'sebav364@gmail.com',
            "password" => "sebavlao"
        ]);
    }
}
