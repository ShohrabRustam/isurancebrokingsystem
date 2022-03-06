<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
{
    /**
     * Handle an incoming request.
     *@author Rustam
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {


        // echo "Check User middleware is Applied  or not on route";

        if((($request->path()=="login") || ($request->path()=="registration")) && ($request->session()->has("user")))
        {

            return redirect('/');
        }

        return $next($request);
    }
}
