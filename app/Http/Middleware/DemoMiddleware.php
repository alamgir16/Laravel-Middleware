<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DemoMiddleware {

    public function handle(Request $request, Closure $next) {
        return $next($request);
    }
}
