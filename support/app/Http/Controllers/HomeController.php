<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Question;
use App\AnswerModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $Request)
    {

        $this->middleware('auth');

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $Request)
    {
        $user_info = $this->getUserInfo(); //lây thông tin user

        $qsv = new Question();
        $questionNew = $qsv->questionAll($user_info['user_id']);

        $aw = new AnswerModel();
        // nhân viên

        
        return view('welcome', ['user_info'=>$user_info,'viewquestion'=>$questionNew, 'aw'=> $aw]);
    }
}
