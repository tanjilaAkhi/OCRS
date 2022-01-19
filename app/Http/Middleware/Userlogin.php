<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Userlogin
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
        if(auth()->user()->role=='user')
        {
            return $next($request);
        }
        // else {
        //     return redirect()->route('user.verification')->with('success','Permission Denied!!');
        // }
    }
}
