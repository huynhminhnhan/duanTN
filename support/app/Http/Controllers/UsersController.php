<?php

namespace App\Http\Controllers;
use App\User;
use App\Account;
use App\Department;
use App\Role;
use Validator;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function Viewusers() {
        
        $Accounts = Account::join('department','department.id_department' ,'=','account.department_id')->get();
        
        return view('adminLayout/user',["Accounts" => $Accounts]);
    }
    public function homeAdmin() {
        return view('adminLayout/home');
    }
    
    public function ViewEditUser(Request $Request) {
        $idAccount = $Request->id_account;
        // dd($idAccount);
        $user_info = $this->getUserInfo(); //lây thông tin user 
        // $userInFor = User::where('id',$)
        // ::load('roles');
        $Account = Account::join('department','account.department_id' ,'=','department.id_department')
        ->where('account.id_account','=',$idAccount)
        ->get()->first();
         $Departments = Department::all();
         $User= User::where('id',$Account->user_id)->get()->first()->load('roles');
         $Role= $User['roles'];
         $Roles = Role::all();
         
        // dd($Role);
        return view('adminLayout/edit-user',
        [
            "Account" => $Account,
            "Departments" => $Departments,
            "Roles"=>$Roles,
            "RoleUser"=>$Role,
            "user_info"=>$user_info
        ]);
    }
   public function EditUser(Request $Request) 
   {    
   
       $input = $Request->all();
    //    dd($input);
       if (empty($input['name']) ) {
        return redirect('/admin/user/')->with('error', 'trường họ tên không được bỏ trống');
       }
      
       $Account = Account::join('department','account.department_id' ,'=','department.id_department')
       ->where('account.id_account',$input['idAccount'])
       ->get()->first();

        $Role = Role::whereIn('name',$input['roles'])->get();
        $User = User::where('id' ,$Account ->user_id)->get()->first();
        $User->save();

        $User->roles()->sync($Role); 
        // sync = nhận một array rule vsa sau khi thực hiện tất cả các roles trước đó sẽ bị xóa. 
        // dd($User->load('roles'));
        $Account ->name = $input['name'];
        $Account ->department_id = $input['Department'];
        $resurt = $Account->save();
        if ($resurt == true) {
             return redirect('/admin/user/'.$input['idAccount'].'')->with('successResurt', 'cập nhật thông tin tài khoản  thành công');
            // return redirect('/admin/user/'.$input['idAccount'].'')->with('successResurt', 'cập nhật thông tin tài khoản  thành công');
        }
        else {
            
            return redirect('/admin/user/'.$input['idAccount'].'')->with('error', 'Có lỗi xãy ra ');
        }
   }
    
}
