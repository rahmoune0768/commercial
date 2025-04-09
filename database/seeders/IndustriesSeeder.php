<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustriesSeeder extends Seeder
{
    public function run()
    {
        $industries = [
            ['name' => 'Agriculture et Agroalimentaire', 'description' => 'Production agricole et transformation des produits alimentaires'],
            ['name' => 'Bâtiment et Construction', 'description' => 'Construction immobilière et travaux publics'],
            ['name' => 'Manufacture et Industrie', 'description' => 'Production industrielle et fabrication'],
            ['name' => 'Mines et Énergie', 'description' => 'Extraction minière et production énergétique'],
            ['name' => 'Commerce et Distribution', 'description' => 'Vente en gros et détail'],
            ['name' => 'Transport et Logistique', 'description' => 'Transport de marchandises et personnes'],
            ['name' => 'Technologies de l\'Information', 'description' => 'Services informatiques et numériques'],
            ['name' => 'Santé et Pharmacie', 'description' => 'Services médicaux et pharmaceutiques'],
            ['name' => 'Finance et Assurance', 'description' => 'Services bancaires et assurances'],
            ['name' => 'Éducation et Formation', 'description' => 'Établissements scolaires et centres de formation'],
            ['name' => 'Hôtellerie et Restauration', 'description' => 'Hôtels, restaurants et cafés'],
            ['name' => 'Énergie et Utilities', 'description' => 'Production et distribution d\'énergie'],
            ['name' => 'Télécommunications', 'description' => 'Opérateurs télécoms et services associés'],
            ['name' => 'Médias et Communication', 'description' => 'Presse, radio, télévision'],
            ['name' => 'Loisirs et Divertissement', 'description' => 'Cinémas, parcs d\'attraction'],
            ['name' => 'Immobilier', 'description' => 'Promotion et gestion immobilière'],
            ['name' => 'Services Professionnels', 'description' => 'Comptabilité, conseil, juridique'],
            ['name' => 'Automobile', 'description' => 'Concessionnaires et services automobiles'],
            ['name' => 'Industrie Pharmaceutique', 'description' => 'Fabrication de médicaments'],
            ['name' => 'Textile et Habillement', 'description' => 'Production textile et prêt-à-porter'],
            ['name' => 'Chimie et Pétrochimie', 'description' => 'Produits chimiques et dérivés pétroliers'],
            ['name' => 'Aéronautique et Spatial', 'description' => 'Industrie aérospatiale'],
            ['name' => 'Défense et Sécurité', 'description' => 'Matériel de défense et services de sécurité'],
            ['name' => 'Tourisme et Voyage', 'description' => 'Agences de voyage et tourisme'],
            ['name' => 'Artisanat', 'description' => 'Production artisanale traditionnelle'],
            ['name' => 'Environnement et Recyclage', 'description' => 'Gestion des déchets et énergies renouvelables'],
            ['name' => 'Recherche et Développement', 'description' => 'Centres de recherche scientifique'],
            ['name' => 'Associations et ONG', 'description' => 'Organisations à but non lucratif'],
        ];

        foreach ($industries as $industry) {
            DB::table('industries')->updateOrInsert(
                ['name' => $industry['name']],
                $industry
            );
        }
    }
}