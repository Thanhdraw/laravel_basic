<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\TrustProxies; // Đảm bảo rằng namespace đúng
use App\Http\Middleware\CheckForMaintenanceMode; // Đảm bảo rằng namespace đúng
use App\Http\Middleware\TrimStrings; // Đảm bảo rằng namespace đúng
use Illuminate\Auth\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance; // Đảm bảo rằng namespace đúng
use App\Http\Middleware\Authenticate; // Đảm bảo rằng namespace đúng
use App\Http\Middleware\RedirectIfAuthenticated; // Đảm bảo rằng namespace đúng

class Kernel extends HttpKernel
{
    protected $middleware = [
        TrustProxies::class,
        CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        TrimStrings::class,
        PreventRequestsDuringMaintenance::class,
    ];

    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => RedirectIfAuthenticated::class,
        'is.admin' => \App\Http\Middleware\IsAdmin::class,
    ];
}
