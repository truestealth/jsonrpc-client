<?php

namespace stealth\JsonRpcClient;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ClientGenerator::class
            ]);
        }

        $this->publishes([
            __DIR__ . '/../config/jsonrpcclient.php' => base_path('config/jsonrpcclient.php'),
        ], 'config');
        
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/jsonrpcclient.php', 'jsonrpcclient'
        );
        if (\is_lumen()) {
            $this->app->configure('jsonrpcclient');
        }
    }
}