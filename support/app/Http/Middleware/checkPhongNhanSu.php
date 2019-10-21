<?php

namespace App\Http\Middleware;

use App\Department;
use Closure;

class checkPhongNhanSu
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
        // dd($SessionUser); exit;
         $Department = Department::where('department.id_department',$SessionUser['department_id'])->get()->first();
         if ($Department->name_depart != 'Phòng nhân sự' ) {
            if (in_array('admin',$SessionUser['roles'])) {
                return $next($request);
            }
            return redirect('/')->with('error', 'Bạn không có quyền truy cập ');
         }
       
        return $next($request);
    }
}
