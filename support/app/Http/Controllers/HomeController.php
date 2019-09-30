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

        

        // echo '<pre>';
        // $user_info = $this->getUserInfo(); //lây thông tin user 
        // var_dump($user_info); 
        // echo '</pre>';
        // exit;
        return view('welcome');
    }
}
