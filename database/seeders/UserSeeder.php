<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Retrieve all roles from the database
        $roles = DB::table('roles')->get();

        // Sample user data with Algerian names and phone numbers
        $users = [
            [
                'name' => 'Ali Rahmoune',
                'email' => 'superalio@msn.com',
                'password' => Hash::make('123+321'),
                'position' => 'Administrateur',
                'mobile' => '0550123456', // Algerian phone number format
                'role_id' => $roles->firstWhere('name', 'Administrateur')->id, // Assign the "Administrateur" role
                'profile_photo' => null, // Optional photo
            ],
            [
                'name' => 'Nadia Khelifi',
                'email' => 'nadia.khelifi@example.com',
                'password' => Hash::make('password123'),
                'position' => 'Gestionnaire',
                'mobile' => '0550234567',
                'role_id' => $roles->firstWhere('name', 'Gestionnaire')->id,
                'profile_photo' => null,
            ],
            [
                'name' => 'Yacine Bouzid',
                'email' => 'yacine.bouzid@example.com',
                'password' => Hash::make('password123'),
                'position' => 'Vendeur',
                'mobile' => '0550345678',
                'role_id' => $roles->firstWhere('name', 'Vendeur')->id,
                'profile_photo' => null,
            ],
            [
                'name' => 'Sabrina Ait Ali',
                'email' => 'sabrina.aitali@example.com',
                'password' => Hash::make('password123'),
                'position' => 'Support Client',
                'mobile' => '0550456789',
                'role_id' => $roles->firstWhere('name', 'Support Client')->id,
                'profile_photo' => null,
            ],
            [
                'name' => 'Rachid Messaoudi',
                'email' => 'rachid.messaoudi@example.com',
                'password' => Hash::make('password123'),
                'position' => 'Utilisateur',
                'mobile' => '0550567890',
                'role_id' => $roles->firstWhere('name', 'Utilisateur')->id,
                'profile_photo' => null,
            ],
            [
                'name' => 'Samira Boudiaf',
                'email' => 'samira.boudiaf@example.com',
                'password' => Hash::make('password123'),
                'position' => 'Administrateur',
                'mobile' => '0550678901',
                'role_id' => $roles->firstWhere('name', 'Administrateur')->id,
                'profile_photo' => null,
            ],
            [
                'name' => 'Mohamed Djahid',
                'email' => 'mohamed.djahid@example.com',
                'password' => Hash::make('password123'),
                'position' => 'Vendeur',
                'mobile' => '0550789012',
                'role_id' => $roles->firstWhere('name', 'Vendeur')->id,
                'profile_photo' => null,
            ],
            [
                'name' => 'Khaled Toumi',
                'email' => 'khaled.toumi@example.com',
                'password' => Hash::make('password123'),
                'position' => 'Gestionnaire',
                'mobile' => '0550890123',
                'role_id' => $roles->firstWhere('name', 'Gestionnaire')->id,
                'profile_photo' => null,
            ],
            [
                'name' => 'Amel Djebbar',
                'email' => 'amel.djebbar@example.com',
                'password' => Hash::make('password123'),
                'position' => 'Support Client',
                'mobile' => '0550912345',
                'role_id' => $roles->firstWhere('name', 'Support Client')->id,
                'profile_photo' => null,
            ],
            [
                'name' => 'Tariq Sari',
                'email' => 'tariq.sari@example.com',
                'password' => Hash::make('password123'),
                'position' => 'Utilisateur',
                'mobile' => '0551023456',
                'role_id' => $roles->firstWhere('name', 'Utilisateur')->id,
                'profile_photo' => null,
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
