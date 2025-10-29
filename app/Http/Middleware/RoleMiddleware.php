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
            abort(403, 'Unauthorized access - user not logged in');
        }

        $userRole = strtolower($user->role);
        $roles = array_map('strtolower', $roles);

        if (!in_array($userRole, $roles)) {
            abort(403, 'Unauthorized access - role mismatch');
        }

        return $next($request);
    }
}
