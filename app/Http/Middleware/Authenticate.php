<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if($request->getRequestUri()==RouteServiceProvider::ADMIN){
            return route('login.admin');
        }
        if (! $request->expectsJson()) {
            return route('login.user');
        }
    }
}
