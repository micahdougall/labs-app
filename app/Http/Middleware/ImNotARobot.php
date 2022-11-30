<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ImNotARobot
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->robot == false) {
            return redirect('/Error');
        }

        return $next($request);
    }
}
