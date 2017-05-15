<?php

namespace App\Http\Middleware;

use Closure;

class admin
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

            if (auth()->check() && auth()->user()->status == 9) {

                return $next($request);

            }

        } else {

            return redirect()->back();

        }
    }
}
