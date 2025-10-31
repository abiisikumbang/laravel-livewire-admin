<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{

    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        if (!$user) {
            abort(403, 'Akses tidak sah - pengguna tidak login');
        }

        $userRole = strtolower($user->role);
        $roles = array_map('strtolower', $roles);

        if (!in_array($userRole, $roles)) {
            abort(403, 'Akses tidak sah - pengguna tidak memiliki hak akses yang sesuai');
        }

        return $next($request);
    }
}
