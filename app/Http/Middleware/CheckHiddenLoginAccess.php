<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckHiddenLoginAccess
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
        if (!$request->session()->has('hidden_login_access') || !$request->session()->get('hidden_login_access')) {
            // Jika tidak, arahkan ke halaman lain atau tampilkan error
            return redirect('/'); // Atau arahkan ke halaman yang diinginkan
        }
        
        return $next($request);
    }
}
