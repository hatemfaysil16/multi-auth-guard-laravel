<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Translation
{
    /**
     *

     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->getRequestUri()=='/translations'){
            if(auth('admin')->check())
            {
                dd('yes');
                return $next($request);
            }else{
                                  dd(Auth::check());

                return redirect()->route('login.admin');
            }
        }
    }
}
