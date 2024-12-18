<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
<<<<<<< HEAD
    protected function redirectTo(Request $request): ?string
=======
    protected function redirectTo($request): ?string
>>>>>>> ac37d0b2 (pertemuan-12)
    {
        return $request->expectsJson() ? null : route('auth.login');
    }
}
