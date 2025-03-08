<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // untuk menguji middleware ini, kunjungi http://127.0.0.1:8000/check-age?age=<masukan nilai umur>
        // middleware akan dijalankan sebelum permintaan ditangani
        if ($request->age <= 200) {
            return redirect()->route("home");
        }
        return $next($request);

        // Gunakan kode dibawah jika ingin middleware menjalankan tugasnya setelah permintaan ditangani

        // $response = $next($request);

        // Perform action

        // return $response;
    }
}
