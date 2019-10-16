<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CataQuestion extends Model
{
    public $table='CataQuestion';
    protected $primaryKey = 'id_CataQuestion';

    public function get3Table($status,$user_info){
        $result = CataQuestion::join('question','CataQuestion.id_CataQuestion' ,'=' ,'question.idCataQuestion')
                ->join('department', 'question.idDepartment', '=', 'department.id_department')
                // ->join('account', 'question.idAdmin', '=', 'account.user_id')
                ->where('question.Status',$status)
                ->where('id_user',$user_info)
                ->select('question.id_question' , 'Title', 'Content','Images', 'Status','question.created_at', 'name_cata', 'description')
                ->get();
        return $result;
    }
    public function testColumn($status,$user_info){
        $result = CataQuestion::join('question','CataQuestion.id_CataQuestion' ,'=' ,'question.idCataQuestion')
                ->join('department', 'question.idDepartment', '=', 'department.id_department')
                // ->join('account', 'question.idAdmin', '=', 'account.user_id')
                ->where('question.Status',$status)
                ->where('id_user',$user_info)
                ->select('question.id_question' , 'department.id_department', 'question.Content')
                ->get();
        return $result;
    }
    public function get3TableEmployee($status){
        $result = CataQuestion::join('question','CataQuestion.id_CataQuestion' ,'=' ,'question.idCataQuestion')
                ->join('department', 'question.idDepartment', '=', 'department.id_department')
                ->where('Status',$status)
                ->select('question.id_question' , 'Title', 'Content','Images', 'Status','question.created_at', 'name_cata', 'description')
                ->get();
        return $result;
    }
    public function searchQuestion($user_info,$query){
        $result = CataQuestion::join('question','CataQuestion.id' ,'=' ,'question.idCataQuestion')
                ->join('department', 'question.idDepartment', '=', 'department.id_department')
                ->where('id_user',$user_info)
                ->where('Title', 'LIKE', "%$query%")
                ->get();
        return $result;
    }

    public function QuestionFindId($id){
        $result = CataQuestion::join('question','CataQuestion.id_CataQuestion' ,'=' ,'question.idCataQuestion')
                ->join('department', 'question.idDepartment', '=', 'department.id_department')
                ->join('account', 'question.id_user', '=', 'account.user_id')
                // ->where('id_user',$user_info)
                ->where('question.id_question', $id)
                ->get();
        return $result;
    }
    function random_password( $length = 6 ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }
}