<?php

use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckRole;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Daftarkan middlewarenya
        $middleware->alias([
            'checkAge' => CheckAge::class,
            'checkRole' => CheckRole::class,
        ]);

        // Gunakan jika ingin menambahkan grouping pada middleware
        $middleware->group('namaGroup', [
            // tambahkan middlewarenya disini
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
