<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Tymon\JWTAuth\Blacklist;
use Tymon\JWTAuth\JWTManager;
use Tymon\JWTAuth\Providers\Storage\Illuminate as Storage;
use Tymon\JWTAuth\Contracts\Providers\JWT as JWTProvider;
use Tymon\JWTAuth\Factory as PayloadFactory;

use App\Services\JWT\CustomBlacklist;
use App\Services\JWT\CustomJWTManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       // Override the Blacklist class
        $this->app->extend(Blacklist::class, function ($service, $app) {
            return new CustomBlacklist(
                $app->make(Storage::class),                         
                $app['config']['jwt.blacklist']                
            );
        });


        // Override the JWTManager class
       $this->app->extend(JWTManager::class, function ($service, $app) {
            return new CustomJWTManager(
                $app->make(JWTProvider::class),
                $app->make(PayloadFactory::class),
                $app->make(Storage::class)
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
