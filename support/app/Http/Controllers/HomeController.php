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
        $user = $Request->user();
        // var_dump($user);
        // exit;
        $user = $Request->user()->authorizeRoles(['employee', 'admin']);
       
       // return view('home');
    }
}
