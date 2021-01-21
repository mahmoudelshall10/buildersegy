<?php

namespace App\Http\Middleware;

use Closure;
Use \Carbon\Carbon;
use Route;
use Illuminate\Support\Facades\URL;


class ComingDate
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
        // if(Route::any()){
        //     return true;
        // }else{
        //     return false;
        // }
        // return URL::temporarySignedRoute(
        //     'event', now()->addMinutes(30)
        // );
        // print_r($request);die;
        $now = Carbon::now();
        // print_r($now->format('d/m/Y'));die;
        if($now->format('d/m/Y') > '9/9/2019'){
            // print_r('true');die;
            return $next($request);
        }else{
            // print_r('false');die;
            return redirect('/event');
        }

    }
}
