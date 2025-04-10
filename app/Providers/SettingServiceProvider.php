<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Inertia\Inertia;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       // Charger les paramètres à partir du cache ou de la base de données
    $settings = Cache::remember('settings', now()->addMinutes(60), function () {
        // Charger tous les paramètres sous forme de tableau clé-valeur
        return Setting::all()->pluck('value', 'key')->toArray();
    });

    // Ajouter les paramètres au fichier de configuration pour un accès facile dans toute l'application
    Config::set('settings', $settings);

    // Passer les paramètres globalement à toutes les vues Inertia (React components)
    Inertia::share('settings', $settings);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Si nécessaire, vous pouvez ajouter des services personnalisés ici.
    }
}
