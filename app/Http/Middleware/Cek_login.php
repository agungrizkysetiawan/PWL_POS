<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  $roles
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Check if the user is logged in. If not, redirect to the login page.
        if (!Auth::check()) {
            return redirect('login');
        }

        // Get the authenticated user.
        $user = Auth::user();

        // Check if the user's role matches any of the roles specified.
        if (in_array($user->level_id, $roles)) {
            // If the user's role matches, continue with the request.
            return $next($request);
        }

        // If the user doesn't have access, redirect to the login page with an error message.
        return redirect('login')->with('error', 'Maaf, Anda tidak memiliki akses.');
    }
}
