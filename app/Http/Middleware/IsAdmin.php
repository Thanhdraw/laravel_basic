<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra xem người dùng đã đăng nhập và có quyền admin hay không
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect()->route('admin.login')
                ->with('error', 'Bạn không có quyền truy cập.');
        }

        return $next($request);
    }
}
