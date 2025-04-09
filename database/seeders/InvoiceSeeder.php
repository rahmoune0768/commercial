<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('fr_FR'); // French locale for the data

        // Retrieve all company, user, and quote IDs
        $companyIds = DB::table('companies')->pluck('id');
        $userIds = DB::table('users')->pluck('id');
        $quoteIds = DB::table('quotes')->pluck('id');

        $invoices = [];

        // Generate 200 random invoices
        for ($i = 0; $i < 200; $i++) {
            $companyId = $faker->randomElement($companyIds); // Random company ID
            $userId = $faker->randomElement($userIds); // Random user ID
            $quoteId = $faker->randomElement($quoteIds); // Random quote ID

            $invoiceNumber = strtoupper($faker->unique()->bothify('INV####??')); // Random invoice number
            $invoiceDate = $faker->date(); // Random invoice date
            $dueDate = $faker->optional()->dateTimeBetween('now', '+1 month'); // Random due date (optional)
            $status = $faker->randomElement(['draft', 'sent', 'paid', 'overdue', 'canceled']); // Random status

            $subtotal = $faker->randomFloat(2, 100, 1000); // Random subtotal between 100 and 1000
            $tax = $faker->randomFloat(2, 0, 100); // Random tax between 0 and 100
            $total = $subtotal + $tax; // Total = subtotal + tax
            $amountPaid = $faker->randomFloat(2, 0, $total); // Random amount paid, up to total
            $balanceDue = $total - $amountPaid; // Balance due = total - amount paid

            $invoices[] = [
                'company_id' => $companyId, // Linked to random company
                'user_id' => $userId, // Linked to random user
                'quote_id' => $quoteId, // Linked to random quote
                'invoice_number' => $invoiceNumber, // Random invoice number
                'invoice_date' => $invoiceDate, // Invoice date
                'dute_date' => $dueDate, // Due date
                'status' => $status, // Status of the invoice
                'uuid' => Str::uuid(), // Unique UUID for the invoice
                'subtotal' => $subtotal, // Financial subtotal
                'tax' => $tax, // Financial tax
                'total' => $total, // Financial total
                'amount_paid' => $amountPaid, // Amount paid
                'balance_due' => $balanceDue, // Balance due
                'notes' => $faker->optional()->text(), // Optional notes for the invoice
                'created_at' => now(), // Created timestamp
                'updated_at' => now(), // Updated timestamp
            ];
        }

        // Insert the invoices into the database
        DB::table('invoices')->insert($invoices);
    }
}
