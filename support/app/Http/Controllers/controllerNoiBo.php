<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamcong;
use App\Trangcanhan;
use Chamcong as GlobalChamcong;

class controllerNoiBo extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Chấm công
    public function chamCong(Request $Request){
        $userInfor = $Request->session()->get('userInfor'); // lây thông tin user
        //dd($userInfor['userInfo']['id']); exit;
        $chamcong = Chamcong::all()->where('id_user', $userInfor['userInfo']['id']);
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
