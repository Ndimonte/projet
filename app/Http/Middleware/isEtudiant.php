<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsEtudiant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->user()->Enseignant() || $request->user()->isAdmin() || $request->user()->Etudiant()) {
            return $next($request);
        }
        abort(403,'Vous n`etes pas enseignant ni gestionnaire ou Admin!');
    }
}
