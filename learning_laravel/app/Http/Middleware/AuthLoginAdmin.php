<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$this->Admin()) {
            return redirect(route('welcome'));
            echo 'middleware this is not admin';
        }
        if ($request->is('category')) {
            echo 'khu vực quản trị';
        }
        return $next($request);
    }

    public function Admin()
    {
        return true;
    }
}
