<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

// Remember that the middleware needs to be registered in Kernel.php

    public function handle($request, Closure $next)
    {

        if (Auth::check())
        {
            if (Auth::user()->isAdmin())
            {
               return $next($request);
            }
        }
        return redirect('/');
    }
}
