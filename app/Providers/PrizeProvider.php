<?php

namespace App\Providers;

use App\Repositories\PrizeInterface;
use App\Repositories\PrizeRepository;
use Illuminate\Support\ServiceProvider;

class PrizeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PrizeInterface::class,function(){
            return new PrizeRepository();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
