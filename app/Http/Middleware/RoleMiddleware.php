<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Si el usuario tiene un rol valido, y que sea entre: admin/vendor/user.
     * Si no cumple con uno de los roles será redireccionado a dashboard.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {

        if ($request->user()->role != $role) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
