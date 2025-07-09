<?php

namespace Layman\LaravelEnvelope;

use Illuminate\Support\ServiceProvider;
use Layman\LaravelEnvelope\Console\EnvelopeCommand;

class EnvelopeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('envelope', function () {
            return new EnvelopeManager();
        });
        $this->mergeConfigFrom(
            __DIR__ . '/../config/envelope.php', 'envelope'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                EnvelopeCommand::class,
            ]);

            $this->publishes([
                __DIR__ . '/../config/envelope.php' => config_path('envelope.php'),
            ], 'config');
        }
    }
}
