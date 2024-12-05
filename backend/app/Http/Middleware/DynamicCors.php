<?php
namespace App\Http\Middleware;
use Closure;

class DynamicCors 
{
    public function handle($request, Closure $next)
    {
        $allowedOrigins = explode(',', env('FRONTEND_URL', 'http://localhost:3000'));
        $origin = $request->headers->get('Origin');

        if (in_array($origin, $allowedOrigins)) 
        {
            header('Access-Control-Allow-Origin: ' . $origin);
        }
        //error_log("$allowedOrigins");
        error_log("$origin");
        

        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

        if ($request->getMethod() === "OPTIONS") {
            return response()->json('OK', 200);
        }

        return $next($request);
    }
}


?>