<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class QuoteSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('fr_FR'); // French locale for the data

        // Retrieve all company and user IDs
        $companyIds = DB::table('companies')->pluck('id');
        $userIds = DB::table('users')->pluck('id');

        $quotes = [];

        // Generate 100 random quotes
        for ($i = 0; $i < 100; $i++) {
            $companyId = $faker->randomElement($companyIds); // Random company
            $userId = $faker->randomElement($userIds); // Random user
            $quoteNumber = strtoupper($faker->unique()->bothify('Q##??##')); // Random quote number
            $quoteDate = $faker->date(); // Random quote date
            $expiryDate = $faker->optional()->dateTimeBetween('now', '+1 month'); // Random expiry date (optional)
            $status = $faker->randomElement(['draft', 'sent', 'accepted', 'rejected', 'expired']); // Random status

            $subtotal = $faker->randomFloat(2, 100, 1000); // Random subtotal between 100 and 1000
            $tax = $faker->randomFloat(2, 0, 100); // Random tax between 0 and 100
            $total = $subtotal + $tax; // Total = subtotal + tax

            $quotes[] = [
                'company_id' => $companyId, // Linked to random company
                'user_id' => $userId, // Linked to random user
                'quote_number' => $quoteNumber, // Random quote number
                'quote_date' => $quoteDate, // Quote date
                'expiry_date' => $expiryDate, // Expiry date
                'status' => $status, // Status of the quote
                'uuid' => Str::uuid(), // Unique UUID for the quote
                'subtotal' => $subtotal, // Financial subtotal
                'tax' => $tax, // Financial tax
                'total' => $total, // Financial total
                'notes' => $faker->optional()->text(), // Optional notes for the quote
                'created_at' => now(), // Created timestamp
                'updated_at' => now(), // Updated timestamp
            ];
        }

        // Insert the quotes into the database
        DB::table('quotes')->insert($quotes);
    }
}
