<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use AppHelper;

class UserAuth
{
 
     public function handle(Request $request, Closure $next){
            
        if(AppHelper::exec()->isUserAuthRoute() && auth()->check()) return redirect()->route('user.dashboard'); 
        else if(!AppHelper::exec()->isUserAuthRoute() && !auth()->check()) return redirect()->route('login'); 
        else return $next($request);
    
    }

}
