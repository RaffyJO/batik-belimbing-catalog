<?php

namespace App\Http;

use App\Http\Middleware\Localization;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        // \Illuminate\Http\Middleware\SetCacheHeaders::class,
        // \Illuminate\Session\Middleware\StartSession::class,
        // \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        // \Illuminate\Cookie\Middleware\EncryptCookies::class,
        // \Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance::class,
        // \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        // \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            // \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            // \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            // \Illuminate\Routing\Middleware\SubstituteBindings::class,
            // // \App\Http\Middleware\SetLocale::class,
            Localization::class,
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // 'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        // 'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        // 'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        // 'can' => \Illuminate\Auth\Middleware\Authorize::class,
        // 'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        // 'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        // 'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        // 'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}
