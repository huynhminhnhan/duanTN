<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Role;
use App\Account;

class Question extends Model
{
    public $table='question';
    protected $primaryKey = 'id_question';

    
    public function questionNew($status){
        
        $result = Question::orderBy('id_question','desc')
                ->where('Status',$status)
                ->get();
        return $result;
    }
    public function questionConnect($status,$user_info){
        $result = Question::join ('CataQuestion', 'Question.idCataQuestion' , '=', 'CataQuestion.id_CataQuestion')
                ->orderBy('Question.id_question','desc')
                ->where('Status',$status)
                ->where('id_user',$user_info)
                ->get(CataQuestion.name);
        return $result;
    }
    // nhan vien tiep nhan câu hỏi
    public function questionEmployee($idAdmin){
        $result = Question::join ('account', 'Question.idAdmin', '=', 'account.user_id')
                ->where('account.user_id',$idAdmin)
                ->get();
        return $result;
    }   
    // cau hoi join user 
    public function questionUser($id){
        $result = Question::join('users' , 'Question.id_user', '=' , 'users.id')
                ->where('Question.id_question', $id)
                ->get()->first();
        return $result;
    }
    // dem so cau hoi :((
    public function coutQuestionUser($id,$Status){
        $result = Question::where('Status', $Status)
                ->where('id_user', $id)
                ->count();
        return $result;
    }
    public function coutAll($Status){
        $result = Question::where('Status', $Status)
                ->count();
        return $result;
    }
    public function coutEmployee($id,$Status){
        $result = Question::where('Status', $Status)
                ->where('idAdmin', $id)
                ->count();
        return $result;
    }
}
