<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class UserAuth
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
        if(auth()->user()->fldType == 'Admin'){
            return $next($request); 
        }
        return redirect('admin/users');
    }
}
