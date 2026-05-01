<?php

use App\Http\Middleware\CheckRoleMiddleware;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Middleware\TrustProxies;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Trust all proxies (ngrok, Cloudflare, load balancers…)
        $middleware->trustProxies(at: '*');

        $middleware->alias([
            'auth'       => Authenticate::class,
            'guest'      => RedirectIfAuthenticated::class,
            'check_role' => CheckRoleMiddleware::class,
        ]);

        // ✅ Exclure le webhook GeniusPay du CSRF
        $middleware->validateCsrfTokens(except: [
            'webhooks/geniuspay',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();