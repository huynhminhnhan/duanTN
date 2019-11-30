<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\Role;
use App\Account;
use Socialite;
use Auth;

class LoginAdminController extends Controller
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
    public function viewAdminLogin() {
       
        return view('auth/admin/login');
    }
    public function postLogin() {
       
    }
    public function authenticated(Request $Request)
{
    if (Auth::attempt(['email' => $Request->input('email'), 
  'password' => $Request->input('password')])) {
    $user = User::where('email',$Request->input('email'))->get()->first();
    $id = $user->id;
    // dd($user->load('roles'));
  
    $roleUser = $user['roles'];
    $arrRole = [];
    foreach ($roleUser as $roleUser) {
       array_push($arrRole,$roleUser->name);
    } 
    
    $Account = Account::where('user_id',$id)->get()->first();
    $AccountAttr = $Account->getAttributes();
    $arrRoles = array(
       "roles" => $arrRole
   );
    $AccountInfor =  array_merge($AccountAttr,$arrRoles);
   //  dd ($AccountInfor);
    $Sessionvalue = $Request->session()->put('AccountInfor',$AccountInfor);
    return redirect('/home')->route('home')->with('success', 'Xin chào admin'.$user->name.'');


 } else {
    return redirect('/admin/login')->with('error', 'Vui lòng kiểm tra lại tên đăng nhập và tài khoản');
 }
    

    // return redirect('/')->with('success', 'Xin chào '.Auth::user()->name.'');;
}
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }
}
