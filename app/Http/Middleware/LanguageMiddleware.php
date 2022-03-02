<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Session()->has('app_locale')
            ? App::setLocale(Session()->get('app_locale'))
            : App::setLocale(config('app.fallback_locale'));
        return $next($request);
    }
}
