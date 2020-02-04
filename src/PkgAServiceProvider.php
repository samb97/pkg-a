<?php

namespace KalKore\PkgA;
use Illuminate\Support\ServiceProvider;

class PkgAServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {

    }
}