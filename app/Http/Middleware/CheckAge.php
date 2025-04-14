<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->input('age') < 18) {
            return response()->json(['message' => 'Accès refusé. Vous devez avoir au moins 18 ans.'], 403);
        }

        return $next($request);
    }
}
