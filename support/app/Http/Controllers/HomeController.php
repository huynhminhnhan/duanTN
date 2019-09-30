<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $Request)
    {
      
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $Request)
    {

        $userInfor = $Request->session()->get('userInfor'); // lây thông tin user 
        // echo '<pre>';
        // var_dump($userInfor);
        // echo '</pre>';
        // exit;
        return view('welcome');
    }
}
