<?php

namespace App\Http\Middleware;

use Closure;

class employee
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
        // var_dump('haha');
        $SessionUser = session()->get('AccountInfor'); // lấy session AccountInfor
        $acceptRouter = array('employees','admin');
        if (! in_array($SessionUser['roles']['name'],$acceptRouter)) {
            return redirect('/')->with('error', 'Bạn không có quyền truy cập ');
        }
        return $next($request);
    }
}
