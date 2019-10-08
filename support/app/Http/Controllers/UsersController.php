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
        $Accounts = Account::join('department','Account.department_id' ,'=','department.id_department')->get();
        // dd($Accounts);
        return view('pages/table/user',["Accounts" => $Accounts]);
    }
    public function ViewEditUser(Request $Request) {
        $idAccount = $Request->id;
        $user_info = $this->getUserInfo(); //lây thông tin user 
        // $userInFor = User::where('id',$)
        // ::load('roles');
        $Account = Account::join('department','Account.department_id' ,'=','department.id_department')
        ->where('Account.id',$idAccount)
        ->get()->first();;

         $Departments = Department::all();
         $User= User::where('id',$Account->user_id)->get()->first()->load('roles');
         $Role= $User['roles'];
         $Roles = Role::all();
        
        // dd($Role);
        return view('pages/table/edit-user',
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
      
       if (empty($input['name']) ) {
        return redirect('/admin/user/')->with('erro', 'trường họ tên không được bỏ trống');
       }
       $Account = Account::join('department','Account.department_id' ,'=','department.id_department')
       ->where('Account.id',$input['idAccount'])
       ->get()->first();
        $Role = Role::whereIn('name',$input['roles'])->get();
        $User = User::where('id' ,$Account ->user_id)->get()->first();
        $User->save();
        $User->roles()->attach($Role);
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
