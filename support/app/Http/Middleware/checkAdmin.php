<?php

namespace App\Http\Middleware;

use Closure;

class checkAdmin
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
        $SessionUser = session()->get('AccountInfor'); // lấy session AccountInfor
        if (!in_array('admin',$SessionUser['roles'])) {
            return redirect('/')->with('error', 'Bạn không có quyền truy cập ');
        }
        return $next($request);
    }
}
