<?php

namespace TheCapybaRalph\LaravelTripwire;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TheCapybaRalph\LaravelTripwire\Commands\TripwireCommand;

class TripwireServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-tripwire')
            ->hasConfigFile()
            ->hasCommand(TripwireCommand::class);
    }
}
