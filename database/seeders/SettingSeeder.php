<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create settings with key-value pairs (no groups)
        Setting::updateOrCreate([
            'key' => 'Societé'
        ], [
            'value' => 'ANEP Communications & Signalitique Unité Centre Oued Smar'
        ]);
        Setting::updateOrCreate([
            'key' => 'Statut Légal'
        ], [
            'value' => 'SPA'
        ]);
        Setting::updateOrCreate([
            'key' => 'Adresse'
        ], [
            'value' => 'Zone Industrielle, Alger, Algerie'
        ]);

        Setting::updateOrCreate([
            'key' => 'Téléphone'
        ], [
            'value' => '023459621'
        ]);

        Setting::updateOrCreate([
            'key' => 'Adresse Email'
        ], [
            'value' => 'contact@mycompany.com'
        ]);

        Setting::updateOrCreate([
            'key' => 'Fax'
        ], [
            'value' => '023235689'
        ]);

        Setting::updateOrCreate([
            'key' => 'Compte CCP'
        ], [
            'value' => '12345678901234'
        ]);
        Setting::updateOrCreate([
            'key' => 'Numéro Fiscal'
        ], [
            'value' => '12345678901234'
        ]);
        Setting::updateOrCreate([
            'key' => 'Registre Commerce'
        ], [
            'value' => '12345678901234'
        ]);
        Setting::updateOrCreate([
            'key' => 'Banque'
        ], [
            'value' => 'BNA'
        ]);
        Setting::updateOrCreate([
            'key' => 'Compte Bancaire'
        ], [
            'value' => '987654321'
        ]);

        Setting::updateOrCreate([
            'key' => 'Logo'
        ], [
            'value' => 'path/to/logo.png'
        ]);

        Setting::updateOrCreate([
            'key' => 'notifications'
        ], [
            'value' => true
        ]);
    }
}
