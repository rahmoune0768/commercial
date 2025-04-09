<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Électronique',
                'description' => 'Tous les produits électroniques, tels que les téléphones, ordinateurs, et accessoires.',
            ],
            [
                'name' => 'Vêtements',
                'description' => 'Vêtements pour hommes, femmes et enfants, y compris les chaussures et accessoires.',
            ],
            [
                'name' => 'Maison et Décoration',
                'description' => 'Meubles, décorations, et accessoires pour la maison.',
            ],
            [
                'name' => 'Alimentation',
                'description' => 'Produits alimentaires divers, y compris les produits frais, en conserve et les boissons.',
            ],
            [
                'name' => 'Jouets',
                'description' => 'Jouets pour enfants de tous âges, y compris les jeux éducatifs et les peluches.',
            ],
            [
                'name' => 'Sports et Loisirs',
                'description' => 'Équipements sportifs, vêtements de sport, et accessoires pour les activités de loisirs.',
            ],
            [
                'name' => 'Santé et Beauté',
                'description' => 'Produits de soins personnels, de santé, et de beauté, y compris les cosmétiques.',
            ],
            [
                'name' => 'Bricolage',
                'description' => 'Outils et matériaux pour les projets de bricolage et d\'amélioration de la maison.',
            ],
            [
                'name' => 'Informatique et Accessoires',
                'description' => 'Ordinateurs, accessoires informatiques, périphériques, et logiciels.',
            ],
            [
                'name' => 'Automobile',
                'description' => 'Accessoires et pièces de rechange pour voitures, motos et autres véhicules.',
            ],
            [
                'name' => 'Livres',
                'description' => 'Livres pour tous les âges, y compris des romans, des livres éducatifs, et des livres spécialisés.',
            ],
            [
                'name' => 'Instruments de Musique',
                'description' => 'Instruments de musique et accessoires pour les musiciens de tous niveaux.',
            ],
            [
                'name' => 'Bijoux',
                'description' => 'Bijoux en or, argent, et autres matériaux précieux, y compris les montres et accessoires.',
            ],
            [
                'name' => 'Mode Homme',
                'description' => 'Vêtements, accessoires et chaussures pour hommes.',
            ],
            [
                'name' => 'Mode Femme',
                'description' => 'Vêtements, accessoires et chaussures pour femmes.',
            ],
            [
                'name' => 'Mode Enfant',
                'description' => 'Vêtements et accessoires pour enfants, y compris les chaussures.',
            ],
            [
                'name' => 'Technologies Wearables',
                'description' => 'Montres intelligentes, bracelets connectés et autres appareils portables.',
            ],
            [
                'name' => 'Produits de Luxe',
                'description' => 'Articles de luxe, y compris des sacs à main, des montres et des accessoires haut de gamme.',
            ],
            [
                'name' => 'Meubles de Jardin',
                'description' => 'Mobilier d\'extérieur, y compris des chaises longues, des tables de jardin, et des accessoires pour le jardin.',
            ],
            [
                'name' => 'Accessoires de Voyage',
                'description' => 'Bagages, sacs à dos, valises et autres accessoires pour le voyage.',
            ],
        ];

        // Insert the categories into the database
        DB::table('product_categories')->insert($categories);
    }
}
