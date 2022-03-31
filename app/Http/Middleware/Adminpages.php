<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Adminpages
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
        // echo "Middleware in Laravel <br><br>";
        // return redirect()->back();

            if (isset(Auth::user()->usertype) && (Auth::user()->usertype) =='1'){
                return $next($request);
            }

                return redirect()->back()->with('notAdminError','Sorry! You do not have admin access.');




    }
}
