<?php

namespace App\Providers;

use App\Services\AppwriteDatabase\SkillService;
use App\Services\AppwriteDatabase\SkillServiceImplement;
use Appwrite\Client;
use Illuminate\Support\ServiceProvider;

class AppwriteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Bind the Appwrite Client as a singleton
        $this->app->singleton(Client::class, function ($app) {
            $client = new Client();

            // It's better to use config instead of env in production code
            $client
                ->setEndpoint(config('appwrite.endpoint'))
                ->setProject(config('appwrite.project_id'))
                ->setKey(config('appwrite.api_key'));

            return $client;
        });

        // Bind SkillService interface to SkillServiceImplement
        $this->app->singleton(SkillService::class, function ($app) {
            $client = $app->make(Client::class);
            return new SkillServiceImplement($client);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
