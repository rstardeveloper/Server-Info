<?php

namespace Somarkn99\HostInfo;

use Illuminate\Support\ServiceProvider;

class HostInfoProvider extends ServiceProvider
{
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . '../routes/api.php');
    }

    public function register()
    {
        //
    }
}
