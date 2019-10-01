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
<<<<<<< HEAD
=======
    private $user;
    private $Account;
    private $Role;
   public function getUserInfo() {
        $userInFor = Auth::user()->load('roles');
        $attrUser = $userInFor->getAttributes();
        $roleUser = $userInFor['roles'][0]->getAttributes();
        $account = Account::where('user_id',$attrUser['id'])->get()->first();
        $accountAttr = $account->getAttributes();
        $arrRole = array(
            "roles" => $roleUser
        );
        // = $userInFor->getAttributes();
        $AccountInfor =  array_merge($accountAttr,$arrRole);
       return $this->Account = $AccountInfor;
     }
    // public function getAccount($id_user) {
    //     return $this->Account = Account::where('user_id',$id_user)->get()->first();
       
    // }

>>>>>>> 97caa235749f67907179ad37b824136391fa54c7
       
        
}
