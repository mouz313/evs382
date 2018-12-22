<?php

namespace App\Http\Middleware;

use Closure;

class DashBoardAuth
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
        if(!empty(session()->get('userData'))){
            return $next($request);
        }else{
            return redirect()->action('HomePageController@getHomePage');
        }
        
    }
}
