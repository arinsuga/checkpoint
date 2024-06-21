<?php

namespace Arins\Bo\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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

        //dd($pRoles);

        $boUser = Auth::user()->bo;
        if ($boUser) {
            return $next($request);
        } //end if

        abort(403, 'Unauthorized action.');
    }
}
