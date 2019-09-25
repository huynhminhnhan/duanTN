<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
       
       
      $userData = $Request->user();
    //   $user = $Request->user()->authorizeRoles(['employee', 'admin']);
    //   echo '<pre>';
    //   var_dump($userData);
    //   var_dump($user);
    //   echo '</pre>';
        //dd($userData);
        // exit;
       // $user = $Request->user()->authorizeRoles(['employee', 'admin']);
       
        //return view('layout.master');
    }
}
