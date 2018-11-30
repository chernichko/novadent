<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\SiteInfo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data = SiteInfo::get();

        $info = [];

        foreach ($data->toArray() as $item){
            $info[$item['code']] = $item['value'];
        }

        View::share('info', $info);
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
