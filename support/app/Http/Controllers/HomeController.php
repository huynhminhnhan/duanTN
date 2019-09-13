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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $Request)
    {
        
        // $input = $Request;
        // // $arr = [
        // //     "name" => 'nhan',
        // //     "age"=> 'hung'
        // // ];
        
        // return $input;
       // $user = $Request;
      $user = json_encode($Request);
       
       
    //    $user = $Request->user()->authorizeRoles(['employee', 'admin']);
       
        return $user;
    }
}
