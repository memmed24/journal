<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Support\Facades\Session;
class isActive
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
        if(Auth::check()) {
            if (Auth::user()->active == 1)
                return $next($request);
            Auth::logout();
            Session::flush();
            Session::flash('notActive', 'Your profile needed to be accepted by admin');
        }
        return redirect('/login');
    }
}
