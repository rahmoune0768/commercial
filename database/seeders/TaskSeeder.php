<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('fr_FR'); // French locale for data
        $users = DB::table('users')->pluck('id'); // Get all user IDs

        $tasks = [];

        for ($i = 0; $i < 100; $i++) { // Creating 50 tasks as an example
            $assignedBy = $faker->randomElement($users); // Random user for "assigned_by"
            $assignedTo = $faker->randomElement($users); // Random user for "assigned_to"
            $statut = $faker->randomElement(['pending', 'in_progress', 'completed']); // Task status
            $dueDate = $faker->dateTimeBetween('now', '+1 month'); // Due date within the next month

            // Random taskable type (for example, linking to different entities like "projects", "clients", etc.)
            $taskableType = $faker->randomElement(['App\Models\Project', 'App\Models\Client']);
            $taskableId = $faker->randomDigitNotNull();

            $tasks[] = [
                'name' => $faker->sentence, // Random task name
                'assigned_by' => $assignedBy, // User who assigned the task
                'assigned_to' => $assignedTo, // User to whom the task is assigned
                'statut' => $statut, // Task status
                'due_date' => $dueDate, // Due date
                'taskable_id' => $taskableId, // Related taskable entity ID (like Project or Client)
                'taskable_type' => $taskableType, // Related taskable entity type (like Project or Client)
                'deleted_at' => null, // Soft delete column
                'created_at' => now(), // Created timestamp
                'updated_at' => now(), // Updated timestamp
            ];
        }

        // Insert the tasks into the database
        DB::table('tasks')->insert($tasks);
    }
}
