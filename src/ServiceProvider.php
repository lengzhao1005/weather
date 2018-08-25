<?php

namespace  Cold\Weather;

class  ServiceProvider extends \Illuminate\Support\ServoceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function (){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}