<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class AuthMiddleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
 
     

     public function handle(Request $request, Closure $next):mixed{

        if($request->key==env('API_KEY')){
            return $next($request);
        }
        else{
            throw new HttpResponseException(
                new Response(
                    json_encode(['error' => 'Token invalid or empty']),
                    403, [
                    'Content-Type' => 'applications/json'
                ])
            );
        }
     }
}
