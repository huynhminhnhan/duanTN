<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;
use App\Account;
use App\Question;
use App\AnswerModel;
use App\CataQuestion;
use App\Department;
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
        $id_cauhoi = $this->random_password(8);

        
        return view('pages/table/request-new',['Question'=>$Question, 'status'=>$status, 'id_cauhoi'=>$id_cauhoi]);
    }
    // chi tiet cau hoi
    function RequestDetail($id){
        // $user_info = $this->getUserInfo(); //lây thông tin user

        $qs = new CataQuestion();
        $Question = $qs->QuestionFindId( $id);
        // dd($Question);
        // cau hoi nhan vien
        $model = new Question();
        //phong ban
        $Depart = Department::all();
        $id_cauhoi = $this->random_password(8);

        // các câu trả lời
        $Ans = new Account();
        $rep = $Ans->connectAnswerAccount($id);
        


        return view('pages/table/RequestDetail', ['Question'=>$Question,
                    'model'=>$model,'Depart'=>$Depart,'id_cauhoi'=>$id_cauhoi, 'rep'=>$rep]);
    }

    // cau hoi cho nhan viên
    function QuestionEmployee($status){
        if($status === 'request-new'){
            $status = 0;
        }else if($status === 'handling'){
            $status = 1;
        }else if($status === 'answered'){
            $status = 2;
        }else if($status === 'done-handling'){
            $status = 3;
        }
        $id_cauhoi = $this->random_password(8);

        // $user_info = $this->getUserInfo(); //lây thông tin user
        $qs = new CataQuestion();
        $Question = $qs->get3TableEmployee($status);
        
        return view('pages/table/RequestEmployee',['Question'=>$Question,'status'=>$status]);
    }
}
