<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\SiteInfo;
use App\ServiceGroups;

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
        $services = ServiceGroups::where(["active" => 1])->get();

        $info = [];

        foreach ($data->toArray() as $item){
            $info[$item['code']] = $item['value'];
        }

        View::share(['info' => $info, 'listServices' => $services]);
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
