<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use Auth;
class Profile extends Controller
{
    // public function __construct(Request $Request)
    // {

    //     $this->middleware('auth');

    // }
    public function index(Request $Request)
    {
        $disable = 'disabled';
        if (isset($_GET['edit'])) {
            $disable = '';
        }


         $user_info = $this->getUserInfo(); //lây thông tin user
        return view('pages.noibo.trangcanhan',
        ['user_info'=>$user_info,
        'disable' => $disable

        ]

    );
    }




    public function update(Request $request, $user_id){
        $update = Account::find($user_id);

        $update->phone = $request->phone; //phone
        $update->birthday = $request->birthday;
        $update->address = $request->address;
        $update->specialized = $request->specialized;
        $update->semester = $request->semester;
        $update->avatar = $request->avatar;


        $update->save();
        return redirect('login')->with(Auth::logout());

    }
}
