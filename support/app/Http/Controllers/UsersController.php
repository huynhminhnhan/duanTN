<?php

namespace App\Http\Controllers;
use App\User;
use App\Account;
use App\Department;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function Viewusers() {
        $Accounts = Account::join('department','Account.department_id' ,'=','department.id')->get();
        // dd($Accounts);
        return view('pages/table/user',["Accounts" => $Accounts]);
    }
    public function ViewEditUser(Request $Request) {
        $idAccount = $Request->id;
        $user_info = $this->getUserInfo(); //lây thông tin user 
        $Account = Account::join('department','Account.department_id' ,'=','department.id')
        ->where('Account.id',$idAccount)
        ->get()->first();;

         $Departments = Department::all();
        //  dd($Department);
        return view('pages/table/edit-user',["Account" => $Account,"Departments" => $Departments]);
    }
    
}
