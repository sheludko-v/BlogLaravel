<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token = config('env.token');

        if ($request->input('token') === $token) {
            return $next($request);
        }

        abort(403, 'Неправильный токен');
    }
}
