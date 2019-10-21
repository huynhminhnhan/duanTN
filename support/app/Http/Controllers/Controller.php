<?php

namespace App\Http\Controllers;
use Auth;
use App\Question;
use App\Account;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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
    function random_password( $length = 6 ) {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $password = substr( str_shuffle( $chars ), 0, $length );
      return $password;
  }     
}
