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
     $id = $Request->user()->id;
    // $role_employee = Role::where('name', 'employee')->first();
    // $users = User::get()->load('roles');
     $users = User::where('id',$id)->get()->load('roles');
    //  $getRole = $this->roles();
    echo '<pre>';
    //echo json_encode($users);
      $data = $users[0]['roles'][0]->name;
        // foreach($data as $data) {
        //     var_dump($data);
        // }
        var_dump($data);
    echo '</pre>';
    //  exit;
        // dd($user);
        // exit;
        //$user = $Request->user()->authorizeRoles(['employee', 'admin']);
       // $user = $Request->user()->id;
    //     echo '<pre>';
    //     var_dump($user->all());

    //    echo '</pre>';
    //    $subset = $users->all(function ($data) {
    //     return $data->relations;
    // // });
    // var_dump($subset);
    
       exit;
        return view('welcome');
    }
}
