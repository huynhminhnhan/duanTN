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
    public function __construct()
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

<<<<<<< HEAD
        $userInfor = $Request->session()->get('userInfor');
=======
        $userInfor = $Request->session()->get('userInfor'); // lây thông tin user 
>>>>>>> cb74d14d77e20c19792f886b4889ca0b1d7c01c5
        return view('welcome');
    }
}
