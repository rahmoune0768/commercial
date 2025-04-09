<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('fr_FR'); // French locale for names, descriptions, etc.
        
        // Retrieve all category IDs
        $categories = DB::table('product_categories')->pluck('id');

        $products = [];

        for ($i = 0; $i < 300; $i++) {
            // Random category ID
            $categoryId = $faker->randomElement($categories);

            // Generating a product with random data
            $products[] = [
                'name' => $faker->word . ' ' . $faker->word, // Product name
                'description' => $faker->sentence, // Random product description
                'image' => $faker->imageUrl(640, 480, 'products', true), // Random image URL
                'type' => $faker->randomElement(['product', 'service']), // Random type ('product' or 'service')
                'price' => $faker->randomFloat(2, 10, 500), // Random price between 10 and 500
                'tax' => $faker->randomFloat(2, 0, 100), // Random tax between 0 and 100
                'sku' => $faker->unique()->lexify('???-#####'), // Unique SKU format
                'category_id' => $categoryId, // Assigned category ID
            ];
        }

        // Insert the products into the products table
        DB::table('products')->insert($products);
    }
}
