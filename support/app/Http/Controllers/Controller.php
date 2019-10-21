<?php

namespace App\Http\Controllers;
use Auth;
use App\Question;
use App\Account;
use Session;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    private $user;
    private $Account;
    private $Role;


    public function getUserInfo() {
    $SessionUser = session()->get('AccountInfor'); // lấy session AccountInfor

       return $this->Account = $SessionUser;
     }
    //  public function information(){
    //     $info = session::get('AccountInfor');
    //     $canhan= json_decode(json_encode($info), true);
    //     // $canhan = Account::all();
    //     // return $canhan['user_id'];
    //     return view('pages.noibo.trangcanhan',['canhan'=>$canhan]);
    // }

}
