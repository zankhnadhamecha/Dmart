<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class CheckPermission
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
        if(!empty(Auth::user())) {
            $user = unserialize(Auth::user()->permissions);
            // dd($user);

            $currentRoute = Route::currentRouteName();

            $role = Role::where(['active' => 1 , ['route' , $currentRoute]])->first();
            // dd($role->id);

            // dd($user[$role->id]);
            // dd($role->permission);
            if(!empty($user[$role->id]) && strcmp($user[$role->id] , $role->permission) == 0) {
                return $next($request);
            }
        }
    }
}
