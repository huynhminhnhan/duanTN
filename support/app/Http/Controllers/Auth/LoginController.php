<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\Role;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/new-request';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function authenticated(Request $Request)
{
     $id = $Request->user()->id;
     $users = User::where('id',$id)->get()->load('roles');
     $infoUser = $users[0]->getAttributes(); // get info user
     $getAttributes = $users[0]['roles'][0]->getAttributes();
     $role = array(
         "role" => $getAttributes
     );
     $user  = array(
        "userInfo" => $infoUser
    );
     $userInfor =  array_merge($role,$user);
    // var_dump($getAttributes);
    // exit;
     $value = $Request->session()->put('userInfor',$userInfor);
    
    //  $value = $Request->session()->put('userInforAdmin',$infoUser);
    if(auth()->user()->hasRole('admin'))
    {
        // $value = $Request->session()->put('userInforAdmin',$infoUser);
        return redirect('/');
    } 
    
    return redirect('/');
}
    public function __construct()
    {
       
        $this->middleware('guest')->except('logout');
    }
}
