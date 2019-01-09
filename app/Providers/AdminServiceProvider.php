<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\TextPages;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $data_main = [];//TextPages::where(['main'=>1])->get()->all();
        $data = [];//TextPages::where(['main', 0)->get()->all();

        $pages = ['main' => $data_main, 'other' => $data];

        View::share('pages', $pages);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
