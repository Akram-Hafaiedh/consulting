<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ConseillerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check() || !auth()->user()->isConseiller()) {
            // return redirect('home')->with('error', 'You do not have access to this section.');
            return redirect('home')->with('error', 'You do not have conseiller access.');
        }
        return $next($request);
    }
}
