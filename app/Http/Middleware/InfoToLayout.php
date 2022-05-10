<?php

namespace App\Http\Middleware;

use Closure;
use App\TextPages;
use Illuminate\Support\Facades\View;

class InfoToLayout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data_main = TextPages::where(['main'=>1])->get()->all();
        $data = TextPages::where(['main' => 0])->get()->all();

        $pages = ['main' => $data_main, 'other' => $data];

        View::share('pages', $pages);
        return $next($request);
    }
}
