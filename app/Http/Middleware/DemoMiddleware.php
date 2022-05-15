<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DemoMiddleware {

    public function handle(Request $request, Closure $next) {

        $token = $request->token;
        if ($token == 'alam') {
            return $next($request);
        } else {
            return response('User Blocked');
        }
    }
}
