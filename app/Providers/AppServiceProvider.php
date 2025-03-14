<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        Validator::extend('nulltable', function ($attribute, $value, $parameters, $validator) {
            return $value === null || $value === '';
        });
    
        Validator::replacer('nulltable', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'O campo :attribute deve ser nulo ou vazio.');
        });
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }   
}   

