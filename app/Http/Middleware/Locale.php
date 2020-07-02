<?php

namespace App\Http\Middleware;

use App;
use Config;
use Closure;

class Locale
{
    public function handle($request, Closure $next)
    {
        $locale = Config::get('app.locale');
        if(session()->has('locale'))
            $locale = session()->get('locale');
        else
            session('locale', $locale);
        App::setLocale($locale);
        return $next($request);
    }
}
