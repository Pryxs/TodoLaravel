<?php

namespace App\Http\Middleware;

use Closure;

class Auth
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->guest()) {
            flash("Vous devez être connecté pour accéder à cette page.");
            return redirect("/login");
        }

        return $next($request);
    }
}
