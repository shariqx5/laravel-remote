<?php

namespace MohammadShariq\LaravelRemote;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MohammadShariq\LaravelRemote\Commands\LaravelRemoteCommand;

class LaravelRemoteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-remote')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-remote_table')
            ->hasCommand(LaravelRemoteCommand::class);
    }
}
