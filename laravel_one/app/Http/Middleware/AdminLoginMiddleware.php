<?php

namespace App\Http\Middleware;

use Closure;
use Admin;
class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->input('admin_email')
        
        Admin::where('admin_email', '=', $request->input('admin_email'))->firstOrfail();
        return $next($request);
        
    }
}
