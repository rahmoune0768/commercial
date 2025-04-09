<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class InvoiceItemSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('fr_FR'); // French locale for the data

        // Retrieve all invoice and product IDs
        $invoiceIds = DB::table('invoices')->pluck('id');
        $productIds = DB::table('products')->pluck('id');

        $invoiceItems = [];

        // Generate 500 random invoice items
        for ($i = 0; $i < 500; $i++) {
            $invoiceId = $faker->randomElement($invoiceIds); // Random invoice ID
            $productId = $faker->randomElement($productIds); // Random product ID

            $quantity = $faker->numberBetween(1, 10); // Random quantity between 1 and 10
            $unitPrice = $faker->randomFloat(2, 10, 500); // Random unit price between 10 and 500
            $tax = $faker->randomFloat(2, 0, 100); // Random tax between 0 and 100
            $discount = $faker->randomFloat(2, 0, 50); // Random discount between 0 and 50

            $subtotal = $quantity * $unitPrice; // Subtotal = quantity * unit price
            $total = $subtotal + $tax - $discount; // Total = subtotal + tax - discount

            $invoiceItems[] = [
                'invoice_id' => $invoiceId, // Linked to random invoice
                'product_id' => $productId, // Linked to random product
                'description' => $faker->sentence, // Random description for the item
                'quantity' => $quantity, // Quantity of the product
                'unit_price' => $unitPrice, // Unit price of the product
                'tax' => $tax, // Tax applied to the item
                'subtotal' => $subtotal, // Subtotal of the item
                'discount' => $discount, // Discount applied to the item
                'total' => $total, // Final total for the item
                'created_at' => now(), // Created timestamp
                'updated_at' => now(), // Updated timestamp
            ];
        }

        // Insert the invoice items into the database
        DB::table('invoice_items')->insert($invoiceItems);
    }
}
