<?php

namespace Arins\Bo\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$pRoles)
    {

        //dd($pRoles);

        $userRoles = Auth::user()->roles;

        foreach ($pRoles as $role) {
            
            foreach ($userRoles as $item) {
                
                if ($role == $item->code) {

                    return $next($request);

                } //end ifs

            } //end loop

        } //end loop


        abort(403, 'Unauthorized action.');
    }
}
