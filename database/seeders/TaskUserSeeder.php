<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TaskUserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('fr_FR'); // French locale for the data

        // Retrieve all task IDs and user IDs
        $taskIds = DB::table('tasks')->pluck('id');
        $userIds = DB::table('users')->pluck('id');

        $taskUserAssociations = [];

        // Generate random associations between tasks and users (e.g., 200 associations)
        for ($i = 0; $i < 200; $i++) {
            $taskUserAssociations[] = [
                'task_id' => $faker->randomElement($taskIds), // Random task_id
                'user_id' => $faker->randomElement($userIds), // Random user_id
                'created_at' => now(), // Created timestamp
                'updated_at' => now(), // Updated timestamp
            ];
        }

        // Insert the associations into the task_user pivot table
        DB::table('task_user')->insert($taskUserAssociations);
    }
}
