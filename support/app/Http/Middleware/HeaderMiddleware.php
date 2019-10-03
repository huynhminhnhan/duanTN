<?php

namespace App\Http\Middleware;

use Closure;

class HeaderMiddleware extends BaseController
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function handlee($request, Closure $next)
    {
        return $next($request);
    }
}
