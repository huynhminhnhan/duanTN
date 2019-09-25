<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;
use App\Question;
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
            $status = 3;
        }else if($status === 'done-handling'){
            $status = 4;
        }
        
        $qs = new Question();
        $Question = $qs->questionNew($status);
        return view('pages/table/request-new',['Question'=>$Question, 'status'=>$status]);
    }
}
