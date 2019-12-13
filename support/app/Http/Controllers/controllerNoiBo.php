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
        
        $userInfor = $this->getUserInfo();
       
        $month =  (int)date("m");
        $year = (int)date("Y");
       if(isset($_GET['month'])) {
            $month = $_GET['month'];
       }
       if(isset($_GET['year'])) {
        $year = $_GET['year'];
   }
        // dd($userInfor);
        $chamcong = Chamcong::where('id_user', $userInfor['user_id'])
                    ->whereMonth('ngay',$month)
                    ->whereYear('ngay',$year)->get()->all();
    //    dd($chamcong);
    $arr_time = [
        "month" => $month,
        "year" => $year
    ];
        return view('pages.noibo.chamcong',[
            'chamcong'=>$chamcong, 
            'user_info'=> $userInfor,
            'arr_time' => $arr_time
            ]);
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
    public function ghiphat(Request $Request){
        $userInfor = $Request->session()->get('userInfor'); // lây thông tin user

        return view('pages.table.calendar', ['user_info'=> $userInfor]);
    }
    // Profile

}
