<?php

namespace App\Http\Controllers;
use App\User;
use App\Account;
use App\Department;
use App\Role;
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
         $Roles = Role::all();
        //  dd($user_info);
        return view('pages/table/edit-user',
        [
            "Account" => $Account,
            "Departments" => $Departments,
            "Roles"=>$Roles,
            "user_info"=>$user_info
        ]);
    }
    
}
