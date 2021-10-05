<?php

namespace Eamirgh\LazyDog;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Eamirgh\LazyDog\Commands\LazyDogCommand;

class LazyDogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lazy-dog')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lazy-dog_table')
            ->hasCommand(LazyDogCommand::class);
    }
}
