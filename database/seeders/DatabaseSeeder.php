<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
          // 1. Seed settings first
          $this->call(SettingSeeder::class);
          // 1. Seed roles first
          $this->call(RoleSeeder::class);

           // 3. Seed users (since users are required for quotes, invoices, and tasks)
           $this->call(UserSeeder::class);
  
          // 2. Seed companies next (because quotes, invoices, and clients will depend on companies)
          $this->call(CompaniesSeeder::class);
  
         
          // 4. Seed clients (as clients are linked to companies)
          $this->call(ContactSeeder::class);
  
          // 5. Seed product categories (so products can be assigned to categories)
          $this->call(ProductCategorySeeder::class);
  
          // 6. Seed products (which depend on categories)
          $this->call(ProductSeeder::class);
  
          // 7. Seed tasks (tasks may be assigned to users)
          $this->call(TaskSeeder::class);
        // 10. Seed quotes (quotes depend on users and companies)
        $this->call(QuoteSeeder::class);
          // 8. Seed invoices (invoices depend on users, companies, and quotes)
          $this->call(InvoiceSeeder::class);
  
          // 9. Seed invoice items (invoice items depend on invoices and products)
          $this->call(InvoiceItemSeeder::class);
  
          
  
          // 11. Seed notifications (which may be sent to any model)
          $this->call(NotificationSeeder::class);
  
          // 12. Seed task_user (pivot table for tasks and users)
          $this->call(TaskUserSeeder::class);
    }
}
