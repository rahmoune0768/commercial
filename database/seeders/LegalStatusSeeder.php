<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegalStatusSeeder extends Seeder
{
    public function run()
    {
        $legalStatuses = [
            [
                'name' => 'Société à Responsabilité Limitée (SARL)',
                'description' => 'La SARL est une forme juridique de société dont les associés ont une responsabilité limitée à leurs apports.',
            ],
            [
                'name' => 'Société par Actions Simplifiée (SAS)',
                'description' => 'La SAS est une forme de société qui offre une grande souplesse dans son fonctionnement et sa gestion.',
            ],
            [
                'name' => 'Société Anonyme (SA)',
                'description' => 'La SA est une société dont le capital est divisé en actions, avec une responsabilité limitée des actionnaires.',
            ],
            [
                'name' => 'Entreprise Individuelle (EI)',
                'description' => 'L\'EI est une entreprise gérée par une seule personne, sans séparation entre le patrimoine personnel et professionnel.',
            ],
            [
                'name' => 'Société en Nom Collectif (SNC)',
                'description' => 'La SNC est une société dans laquelle les associés sont indéfiniment et solidairement responsables des dettes.',
            ],
            [
                'name' => 'Société en Commandite Simple (SCS)',
                'description' => 'La SCS est une société composée de commandités (responsabilité illimitée) et de commanditaires (responsabilité limitée).',
            ],
            [
                'name' => 'Société en Commandite par Actions (SCA)',
                'description' => 'La SCA est une société dans laquelle les commanditaires ont une responsabilité limitée à leurs apports, et les commandités ont une responsabilité illimitée.',
            ],
        ];

        foreach ($legalStatuses as $status) {
            DB::table('legal_statuses')->insert($status);
        }
    }
}
