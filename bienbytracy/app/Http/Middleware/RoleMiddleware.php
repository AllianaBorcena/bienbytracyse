<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
        //GOAL: The normal user can't access the admin dashboard
       //From the request instance, you can erquest the user instance
        if($request->user()->role === $role){
            return $next($request);

        }
        return to_route('dashboard');
    }
}
