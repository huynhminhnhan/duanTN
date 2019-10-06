<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trangcanhan;

class Profile extends Controller
{
    // public function __construct(Request $Request)
    // {

    //     $this->middleware('auth');

    // }
    // public function index(Request $Request)
    // {

    //      $user_info = $this->getUserInfo(); //lây thông tin user
    //     return view('welcome', ['user_info'=>$user_info]);
    // }
    public function information(){
        $canhan = Trangcanhan::all();
        return view('pages.noibo.trangcanhan',['canhan'=>$canhan]);
    }
}
