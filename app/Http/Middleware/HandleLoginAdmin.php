<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;

class HandleLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login');
        }
        if ($user->role != 0) {
            return redirect()->route('login')->with('accessdeny',__('Bạn không có quyền truy cập vào trang này'));
        }
        return $next($request);


    }
}
