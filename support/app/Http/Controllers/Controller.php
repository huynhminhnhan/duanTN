<?php

namespace App\Http\Controllers;
use Auth;
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
        
}
