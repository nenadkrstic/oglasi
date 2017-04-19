<?php

namespace App\Http\Middleware;

use Closure;

class authUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         if ($request->user()) {

            if (auth()->check()) {

                return $next($request);

            }

        } else {

            return redirect()->back();

        }
    }
}
