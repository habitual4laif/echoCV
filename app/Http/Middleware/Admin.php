<?php

namespace App\Http\Middleware;
use Auth;
use App\User;

use Closure;

class Admin
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
        if (! Auth::check()) {
        return redirect()->route('/');
         }


         if(auth()->user()->type == 'echovc' )
            {
                return $next($request);
            }
         // if(auth()->user()->is_admin == 1)
         // {
         // return $next($request);
         // }
         else
         {
            abort('404');
         }
    }
}
