<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('fr_FR'); // French locale for the data

        // Retrieve all notifiable models (tasks, users, etc.)
        $users = DB::table('users')->pluck('id');
        $tasks = DB::table('tasks')->pluck('id');
        
        $notifications = [];

        // Generate 100 random notifications
        for ($i = 0; $i < 100; $i++) {
            // Randomly pick a notifiable type and ID (user or task)
            $notifiableType = $faker->randomElement(['App\Models\User', 'App\Models\Task']);
            $notifiableId = $faker->randomElement($notifiableType == 'App\Models\User' ? $users : $tasks);
            
            $notifications[] = [
                'id' => Str::uuid(), // Generate a UUID for the notification
                'type' => $faker->word, // Random notification type (e.g., 'task_assigned', 'message_received')
                'notifiable_id' => $notifiableId, // Random notifiable ID
                'notifiable_type' => $notifiableType, // Random notifiable type (User or Task)
                'data' => $faker->sentence, // Random data/message for the notification
                'read_at' => $faker->optional()->dateTimeThisYear(), // Random read_at timestamp (nullable)
                'created_at' => now(), // Created timestamp
                'updated_at' => now(), // Updated timestamp
            ];
        }

        // Insert the notifications into the database
        DB::table('notifications')->insert($notifications);
    }
}
