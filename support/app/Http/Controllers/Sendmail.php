<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Department;
use App\mail\OrderShipped;
class Sendmail extends Controller
{
    public function viewSendMailDepartments() {
        $Departments = Department::all();
        return view('adminLayout/sendmail',[
            "Departments" => $Departments
        ]);
    }
    public function SendMailDepartments(Request $Request) {
        $input = $Request->all();
        $userEmail = User::select('email')
        ->join('account','account.user_id' ,'=' ,'users.id')
        ->join('department','account.department_id','=','department.id_department')
        ->wherein('id_department',$input['Department'])
        ->get();
        foreach($userEmail as $email) {
            mail::to($email->email)->send(new OrderShipped($input['content'],$input['subject']));
        }
        return redirect('/internal/sendNotification')->with('success', 'Mail đã gửi thành công'); 
      
    }
}
