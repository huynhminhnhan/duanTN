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
    public function handleProviderCallback()
    {
        // session()->put('state', $request->input('state'));

        //$user = Socialite::driver('google')->user();
         $user = Socialite::driver('google')->user();
       dd($user);
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
        //  dd ($user);
        // var_dump($id);
        // var_dump($id);
        $finduser = User::where('googleId', $id)->first();
        // var_dump($finduser);
        // exit;
         if ($finduser) {
            Auth::login($finduser);
            return redirect('/')->with('success', 'Xin chào '.$finduser->name.' đã đăng nhập vào hệ thống');
         }

        $newUser = User::create([
            'name' => $nameUser,
            'email' => $user->email,
            'googleId' => $id,
            'password' => $passwordUser,

        ]);
        $newAccount = Account::create([
            'user_id' => $newUser->id,
            'name' => $user->name,
            'avatar' => $user->avatar,
            'sex' => $user->user['gender'],
            'status'=> 1 ,
            'department_id' => 2,

        ]);
        $newUser
        ->roles()
        ->attach(Role::where('name', 'student')->first());

        // echo '<pre>';
        //     var_dump($newUser->load('roles'));
        //     echo '</pre>';
        //     exit;
        Auth::login($newUser);
        return redirect('/')->with('success', 'Xin chào '.$newUser->name.' đã đăng nhập vào hệ thống');;
         // insert user
        //  $User = new User;
        //  $User->name = $nameUser;
        //  $User->password = $passwordUser;
        //  $User->email = $user->email;
        //  $User->googleId = $id;
        //  $User->save();
        //  $insertedId = $User->id;

        // return Socialite::driver('google')->stateless()->user();
        // return redirect('/')->put('registerGoogle','true');
        //  $loginUser = User::where('id',$id)->get();
        //  login after register
        // echo $insertedId ;
        // exit;
        // return authenticated();
         // insert User
        //dd($user);
        // $user->token;
    }
    public function authenticated(Request $Request)
{
     $id = $Request->user()->id;
     $users = User::where('id',$id)->get()->load('roles');

     if(!(auth()->user()->hasRole('admin')))
     {
         // $value = $Request->session()->put('userInforAdmin',$infoUser);
         return redirect('/new-request');
     }

    //  $infoUser = $users[0]->getAttributes(); // get info user
    //  $Account = Account::where('user_id',$id)->get()->first();
    //  $Account = $Account->getAttributes();

    //  $getAttributes = $users[0]['roles'][0]->getAttributes();
    //  $role = array(
    //      "role" => $getAttributes
    //  );

    //  $userInfor =  array_merge($Account,$role);
    //  $value = $Request->session()->put('userInfor',$userInfor);

    //  $value = $Request->session()->put('userInforAdmin',$infoUser);
    $Account = Account::where('user_id',$id)->get()->first();
    {
        //$value = $Request->session()->put('userInforAdmin',$infoUser);
        return redirect('/')->with('success', 'Xin chào admin'.Auth::user()->name.'');
    }

    return redirect('/')->with('success', 'Xin chào '.Auth::user()->name.'');;
}
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }
}
