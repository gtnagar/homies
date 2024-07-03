<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        // Register any bindings or services here
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Custom validation rule for Gmail
        Validator::extend('gmail', function ($attribute, $value, $parameters, $validator) {
            return strpos($value, '@gmail.com') !== false;
        });

        Validator::replacer('gmail', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'The :attribute must be a valid Gmail address.');
        });
    }
}
