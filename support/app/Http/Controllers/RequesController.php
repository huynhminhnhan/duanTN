<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Quotation;
use App\User;
use App\Question;
use App\CataQuestion;
// mail
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
// use Mail;


use App\AnswerModel;
use App\Department;
use HomeController;
use Validator;
use Auth;

class RequesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function view() {
         // echo '<pre>';
        $user_info = $this->getUserInfo(); //lây thông tin user
        // var_dump($user_info);
        // echo '</pre>';
        $depart = new Department();
        $department = $depart->where("state" ,"=", "0")->get();
       
        $Cata = CataQuestion::all();

        return view('pages/form/new-request', ['department' => $department, 'Cata'=>$Cata],['user_info'=> $user_info]);
    }
    // search
    public function search(){
        $user_info = $this->getUserInfo(); //lây thông tin user

        return view('pages/form/search-request', ['user_info'=> $user_info]);
    }
    public function getSearchAjax(Request $request){

        $user_info = $this->getUserInfo(); //lây thông tin user

        if($request->get('query'))
        {
            $query = $request->get('query');

            $question = new CataQuestion();

            $data = $question->searchQuestion($user_info['user_id'],$query);

            echo $data;
            exit;
       }
    }

    function insert(Request $request){
        $validate= Validator::make(
            $request->all(),
            ['idDepartment' => 'required',
            'Content' => 'required | max:1500',
            'Title' =>  'required | max:225 | min:5',
            'idCataQuestion' => 'required'],
            [
                'required' => ':attribute không được bỏ trống ',
                'max:1500' => ':attribute không được quá 1500 ký tự',
                'max:225' => ':attribute không được quá 225 ký tự',
                'min:5' => ':attribute không được ít hơn 5 ký tự'
            ],
            [
                'idDepartment' => 'Phòng ban',
                'Content'=>'Nội dung yêu cầu',
                'idCataQuestion'=> 'Chủ đề',
                'Title'=> 'Tiêu đề yêu cầu'
            ]
        );
        if($validate->fails()){
            // echo 'aaa';
            return redirect('/new-request')->withErrors($validate);
        }else{
            $question = new Question();
            // phong ban
            $question->idDepartment = $request->idDepartment;
            // noi dung
            $question->Content = $request->Content;
            // tieu de yeu cau
            $question->Title = $request->Title;

            if($request ->hasFile('Images')){
                $now = date("ymd_His");
                $tenfile = 'upload/'.$now.".jpg";
                $file = $request -> file('Images');

                $file -> move('upload',$tenfile);
                $question->Images = $tenfile;
            }
            // chu de
            $question->idCataQuestion = $request->idCataQuestion;

            $user_info = $this->getUserInfo(); //lây thông tin user
            // dd($user_info);
            $question->id_User = $user_info['user_id'];
            // $question->idAdmin = 2;
            $question->save();


            return redirect('/new-request')->with('success', 'Bạn đã thêm câu hỏi thành công'); 
        }
    }
    // chap nhan cau hoi 
    public function Receive($id_admin, $id_question){
        // dd($id_admin);
        //  dd($id_question);
        $question = Question::find($id_question);

        $question->idAdmin = $id_admin;
        $question->Status = 1;
        $question->save();
        return back()->with('success', 'Bạn đã tiếp nhận câu hỏi thành công'); 
    }
    // phan hoi cau hoi tu nhan vien
    public function RepReceive(Request $request, $id_user, $id_question){
        $Ans = new AnswerModel();
        $Ans->id_people = $id_user;
        $Ans->id_question = $id_question;
        $Ans->Content_Answer = $request->rep;
        $Ans->save();
        if((session()->get('AccountInfor')['roles'][0])  != 'student'){
            $question = Question::find($id_question);
            $question->Status = 2;
            $question->save();
            $qs = new Question();
            $user = $qs->questionUser($id_question);
            // mail
            // dd($user->email);
            // dd($question);
            // $mail_user = User::find($id_question);
            // dd($mail_user['email']);
            $order = $Ans->getNewAnswer();
            //mail
            // $messenger = $order[0]['Content_Answer'];
            // Mail::to($user->email)->send(new OrderShipped($messenger));
            //end mail
            // dd($request->user());
            // Mail::to('hungnhps06785@fpt.edu.vn')->send('');
        }

        return back()->with('success', 'Bạn đã trả lời câu hỏi thành công'); 
    }
    public function done($id_question){
        $question = Question::find($id_question);
        $question->Status = 3;
        $question->save();

        return redirect('/mission/done-handling')->with('success', 'Bạn đã đóng câu hỏi'); 
    }
}
