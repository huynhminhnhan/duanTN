<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Quotation;
use App\Question;
use Validator;
use Auth;

class RequesController extends Controller
{
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
                $tenfile = "images/".$now.".jpg";
                $file = $request -> file('Images');
                // $file -> move('images',$tenfile); 
                $question->Images = $tenfile;
            }
            // chu de
            $question->idCataQuestion = $request->idCataQuestion;
            $question->idUser = 1;
            $question->idAdmin = 2;
            $question->save();
            return redirect('/new-request') ;
        }
    }
}
