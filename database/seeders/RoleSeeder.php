<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'name' => 'Administrateur',
                'description' => 'Un administrateur a un contrôle total sur toutes les fonctions du CRM et peut gérer les utilisateurs, les paramètres et les données.',
            ],
            [
                'name' => 'Gestionnaire',
                'description' => 'Un gestionnaire supervise les opérations quotidiennes, gère les projets et les tâches, mais n’a pas accès à tous les paramètres du système.',
            ],
            [
                'name' => 'Vendeur',
                'description' => 'Un vendeur est responsable de la gestion des opportunités commerciales et des clients potentiels, mais avec un accès limité aux autres parties du CRM.',
            ],
            [
                'name' => 'Support Client',
                'description' => 'Le support client aide les clients avec leurs demandes et problèmes, et a accès aux tickets et interactions avec les clients.',
            ],
            [
                'name' => 'Utilisateur',
                'description' => 'Un utilisateur standard a un accès limité au CRM et est généralement restreint aux fonctionnalités qui sont directement liées à leur rôle ou tâche.',
            ],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->insert($role);
        }
    }
}
