<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamcong;
use Chamcong as GlobalChamcong;

class controllerNoiBo extends Controller
{
    // Chấm công
    public function chamCong(){
        $chamcong = Chamcong::all()->where('id_user', 1);
        return view('pages.noibo.chamcong',['chamcong'=>$chamcong]);
    }
}
