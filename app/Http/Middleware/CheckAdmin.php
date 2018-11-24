<?php

namespace App\Http\Middleware;

use App\UserGroups;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        $user = Auth::user();

        $group = UserGroups::where('name', 'admin')->first();

//        dd($group,$user);

        if($group->id !== $user->group_id) {
            return redirect('/');
        }

//        if(!$user->active) {
//            return redirect('/');
//        }

        return $next($request);
    }
}
