<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $data = [
            ['name'=>'taro', 'mail'=>'taro@yamada'],
            ['name'=>'hanako', 'mail'=>'hanako@flower'],
            ['name'=>'sachiko', 'mail'=>'sachi@happy'],
        ];
        $repuest->merge(['data=>$data']);
        return $next($request);
    }
}
