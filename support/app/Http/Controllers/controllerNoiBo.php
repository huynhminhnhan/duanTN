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
        return view('pages.noibo.chamcong',['chamcong'=>$chamcong, 'user_info'=> $userInfor]);
    }
    // bảng lương
    public function banluong(Request $Request){
        
        $userInfor = $Request->session()->get('userInfor'); // lây thông tin user 

        return view('pages.table.payroll',['user_info'=> $userInfor]);
    }
    // xem lịch trực
    public function lichtruc(Request $Request){
        $userInfor = $Request->session()->get('userInfor'); // lây thông tin user 

        return view('pages.table.calendar', ['user_info'=> $userInfor]);
    }
    // Profile
    public function profile(){
        $canhan = Trangcanhan::all();
        return view('pages.noibo.trangcanhan',['canhan'=>$canhan]);
    }
}
