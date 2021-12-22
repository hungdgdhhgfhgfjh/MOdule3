<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class checkAdminLogin 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // nếu user đã đăng nhập
        $user = Auth::user();
        // dd($user->level);

        if(empty($user)){
           
                return redirect()->route('home.index');
            
        }else
        {
        
            if($user->level == "sếp")
            {
               return $next($request);
            }   
            else
            {
              return redirect()->route('home.index');
            }
        }
         
           
            return $next($request);
        

    }
}
