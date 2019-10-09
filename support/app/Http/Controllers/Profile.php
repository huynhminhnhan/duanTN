<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class Profile extends Controller
{
    public function information(){
        $canhan = Trangcanhan::all();
        return view('pages.noibo.trangcanhan',['canhan'=>$canhan]);
    }
}
