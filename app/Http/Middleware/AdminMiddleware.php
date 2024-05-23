<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna masuk dan memiliki peran admin
        if ($request->user() && $request->user()->name === 'admin') {
            return $next($request);
        }

        // Jika bukan admin, redirect ke halaman lain atau tampilkan pesan error
        return redirect('/')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman admin.');
    }
}
