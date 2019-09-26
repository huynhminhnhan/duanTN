<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamcong;
use Chamcong as GlobalChamcong;

class controllerNoiBo extends Controller
{
    // Chấm công
    public function chamCong(){
        $chamcong = Chamcong::all();
        return view('pages.noibo.chamcong',['chamcong'=>$chamcong]);
    }
    // bảng lương
    public function banluong(){
        return view('pages.table.payroll');
    }
    // xem lịch trực
    public function lichtruc(){
        return view('pages.table.calendar');
    }
    
}
