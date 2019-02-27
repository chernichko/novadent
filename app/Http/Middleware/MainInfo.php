<?php

namespace App\Http\Middleware;

use Closure;
use App\SiteInfo;
use App\ServiceGroups;
use View;

class MainInfo
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
        $data = SiteInfo::get();
        $services = ServiceGroups::where(["active" => 1])->get();

        $info = [];

        foreach ($data->toArray() as $item){
            $info[$item['code']] = $item['value'];
        }

        if(empty($info)){
            $info=[
                'phone'=>'',
                'phone1'=>'',
            ];
        }

        View::share(['info' => $info, 'listServices' => $services]);
        return $next($request);
    }
}
