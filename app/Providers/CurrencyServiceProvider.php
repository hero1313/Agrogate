<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Services\CurrencyConversionService;
use Illuminate\Support\Facades\Session;


class CurrencyServiceProvider extends ServiceProvider
{
    public function boot(CurrencyConversionService $currencyConversionService)
    {
        // Get the currency rate
        $currencyRate = $currencyConversionService->convertCurrency();
        // Share the currency rate with all views
        View::composer('*', function ($view) use ($currencyRate) {
            $currency = Session::get('currency');
            $view->with('currency', $currency);
            $view->with('currencyRate', $currencyRate); 
        });
    }

    public function register()
    {
        // Bind the CurrencyConversionService in the service container
        $this->app->singleton(CurrencyConversionService::class, function ($app) {
            return new CurrencyConversionService();
        });
    }
}

