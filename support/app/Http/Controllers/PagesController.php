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
        $Question = $qs->questionConnect($status);
        // echo '<pre>';
        // var_dump($Question[1]->getAttributes());
        // echo '</pre>';
        // exit;
        return view('pages/table/request-new',['Question'=>$Question, 'status'=>$status]);
    }
    function Mission($status){
        if($status === 'new-request'){
            $status = 0;
        }else if($status === 'm'){
            $status = 1;
        }else if($status === 'move-in'){
            $status = 3;
        }else if($status === 'move-away'){
            $status = 4;
        }else if($status === 'research'){
            $status = 5;
        }
    }
}
