<?php

namespace App\Providers;

use App\Http\Controllers\Stocks\EconomicTimesController;
use App\Http\Controllers\Stocks\MoneyControlController;
use App\Interfaces\StockMarketInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StockMarketInterface::class, function ($app) {
            switch ($app->make('config')->get('stocks.stock-website')) {
                case 'money-control':
                    return new MoneyControlController;
                case 'economic-times':
                    return new EconomicTimesController;
                default:
                    throw new \RuntimeException("Unknown Stock Website");
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
