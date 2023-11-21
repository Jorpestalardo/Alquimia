<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && ($request->user()->roles_id === 1 || $request->user()->roles_id === 2 || $request->user()->roles_id === 3)) {
            return $next($request);
        }

        return redirect()->route('auth.login')->with('message.error', 'Lo siento, esta vista no está disponible.');
    }
}
