<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::namespace('users')->prefix('users')->name('users.')->group(base_path('/routes/web.php'));
            // Route::namespace('Admin')->prefix('admin')->name('admin.')->group(base_path('/routes/admin.php'));
        },
    )
    // protected $routeMiddleware = [
    //     'auth.login' => \App\Http\Middleware\Login::class,
    // ];
    
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->alias([
        //     'users' => \App\Http\Middleware\Login::class,
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
