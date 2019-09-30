<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamcong;
use App\Trangcanhan;
use Chamcong as GlobalChamcong;

class controllerNoiBo extends Controller
{
    // Chấm công
    public function chamCong(){
        $chamcong = Chamcong::all();
        return view('pages.noibo.chamcong',['chamcong'=>$chamcong]);
    }
    // Trang cá nhân
    public function profile(){
        $canhan = Trangcanhan::all();
        return view('pages.noibo.trangcanhan',['canhan'=>$canhan]);
    }
}
