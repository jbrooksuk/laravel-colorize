<?php

namespace JamesBrooks\Colorize;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Stringable;

class ColorizeServiceProvider extends ServiceProvider
{
    /**
     * Boot any application services.
     *
     * @return void
     */
    public function boot()
    {
        Stringable::mixin(new Colorize());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
