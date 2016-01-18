<?php

namespace DraperStudio\Reviewable;

use DraperStudio\ServiceProvider\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    protected $packageName = 'reviewable';

    public function boot()
    {
        $this->setup(__DIR__)
             ->publishMigrations();
    }
}
