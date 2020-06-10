<?php

namespace Wangct\LaravelAlipay;

use Alipay\EasySDK\Kernel\Config;
use Alipay\EasySDK\Kernel\Factory;
use Alipay\EasySDK\Kernel\Marketing;
use Alipay\EasySDK\Kernel\Member;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {

    }


    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/config.php');

        $this->publishes([$source => config_path('alipay.php')], 'laravel-alipay');

        $this->mergeConfigFrom($source, 'alipay');
    }

    public function register()
    {
        $this->setupConfig();

        $apps = [
            'marketing' => Marketing::class,
            'member' => Member::class,
        ];

        foreach ($apps as $name => $class) {
            $accounts = config('alipay.'.$name);

            foreach ($accounts as $account => $config) {
                $this->app->singleton('alipay.'.$name, function ($app) use ($name, $config, $class) {
                    Factory::setOptions(new Config(array_merge(config('alipay.defaults', []), $config)));

                    return Factory::{$name}();
                });
            }

            $this->app->alias("alipay.{$name}.default", 'alipay.'.$name);
            $this->app->alias("alipay.{$name}.default", 'easyalipay.'.$name);

            $this->app->alias('alipay.'.$name, $class);
            $this->app->alias('easyalipay.'.$name, $class);
        }
    }
}