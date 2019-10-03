<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;
use App\Question;
use App\CataQuestion;
class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function Question($status){
        if($status === 'request-new'){
            $status = 0;
        }else if($status === 'handling'){
            $status = 1;
        }else if($status === 'answered'){
            $status = 2;
        }else if($status === 'done-handling'){
            $status = 3;
        }

        $user_info = $this->getUserInfo(); //lây thông tin user 
        $qs = new CataQuestion();
        $Question = $qs->get3Table($status,$user_info['user_id']);
        
        return view('pages/table/request-new',['Question'=>$Question, 'status'=>$status, 'user_info'=> $user_info]);
    }
   
}
