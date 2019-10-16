<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\Role;
use App\Account;
use Socialite;
use Auth;

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
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback(Request $Request)
    {
        
        $user = Socialite::driver('google')->stateless()->user();
       // dd($user);
        // exit;
        $id =  $user->getId();
        $family_name = $user->user['family_name'];
        $email_verified  = $user->user['email_verified'];
        $hd = '';
        $nameUser = str_replace(' ', '',trim($user->name));
        $passwordUser = bcrypt('Svpoly'."$id");
        if (!empty($user->user['hd'])) {
            $hd = $user->user['hd'];
        }


         if (empty($hd) || $hd != 'fpt.edu.vn' ) {
            return redirect('/login')->with('error', 'Vui lòng đăng nhập bằng email FPT');
         }
         if ($email_verified == false) {
            return redirect('/login')->with('error', 'Vui lòng Xác thực email trước khi đăng nhập ');
         }

        $finduser = User::where('googleId', $id)->first();

         if ($finduser) {
            $userInFor =  $finduser->load('roles');
            $roleUser = $userInFor['roles'];
            $arrRole = [];
            foreach ($roleUser as $roleUser) {
               array_push($arrRole,$roleUser->name);
            } 
            $arrRoles = array(
                "roles" => $arrRole
            );
            $Account = Account::where('user_id',$userInFor->id)->get()->first();
            if ($user->avatar != $Account->avatar ) {
                $Account->avatar = $user->avatar;
                $Account->save();
            }
            $AccountAttr = $Account->getAttributes();
            $arrRole = array(
               "roles" => $roleUser
           );
            $AccountInfor =  array_merge($AccountAttr,$arrRoles);
            $Sessionvalue = $Request->session()->put('AccountInfor',$AccountInfor);
            Auth::login($finduser);
            return redirect('/')->with('success', 'Xin chào '.$finduser->name.' đã đăng nhập vào hệ thống');
         }

        $newUser = User::create([
            'name' => $nameUser,
            'email' => $user->email,
            'googleId' => $id,
            'password' => $passwordUser,

        ]);
        // if ()
        $sex = 'Giới tính khác';
        if (isset($user->user['gender'])) {
            $sex  = isset($user->user['gender']);
        }
        $newAccount = Account::create([
            'user_id' => $newUser->id,
            'name' => $user->name,
            'avatar' => $user->avatar,

            'sex' => $sex,
            'status'=> 1 ,
            'department_id' => 2,

        ]);
        $newUser
        ->roles()
        ->attach(Role::where('name', 'student')->first());
        $userInFor =  $newUser->load('roles');
        $roleUser = $userInFor['roles'];
        $arrRole = [];
        foreach ($roleUser as $roleUser) {
           array_push($arrRole,$roleUser->name);
        } 
        $arrRoles = array(
            "roles" => $arrRole
        );

        $Account = Account::where('user_id',$userInFor->id)->get()->first();

        $AccountAttr = $Account->getAttributes();
       
        $AccountInfor =  array_merge($AccountAttr,$arrRoles);
        $Sessionvalue = $Request->session()->put('AccountInfor',$AccountInfor);
       
        Auth::login($newUser);
        return redirect('/')->with('success', 'Xin chào '.$newUser->name.' đã đăng nhập vào hệ thống');

    }
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }
}
