<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('fr_FR'); // French locale for Algerian names and phone numbers
        $companies = DB::table('companies')->pluck('id'); // Get all company IDs

        $clients = [];

        for ($i = 0; $i < 300; $i++) {
            $isPrimary = $i % 5 == 0; // Every 5th client will be marked as primary

            $clients[] = [
                'name' => $faker->name, // Random Algerian name
                'position' => $faker->jobTitle, // Random position
                'email' => $faker->unique()->safeEmail, // Unique email
                'phone' => $this->generateAlgerianPhoneNumber(), // Unique Algerian phone number
                'company_id' => $faker->randomElement($companies), // Random company_id from the companies table
                'isprimary' => $isPrimary,
            ];
        }

        // Insert 300 clients into the database
        DB::table('contacts')->insert($clients);
    }

    /**
     * Generate a random Algerian phone number.
     *
     * @return string
     */
    private function generateAlgerianPhoneNumber()
    {
        // Algerian phone numbers start with 05, followed by 8 random digits
        return '05' . rand(10000000, 99999999);
    }
}
