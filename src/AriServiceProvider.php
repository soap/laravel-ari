<?php

namespace Soap\Ari;

use Soap\Ari\Commands\AriCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AriServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-ari')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-ami_table')
            ->hasCommand(AriCommand::class);
    }
}
