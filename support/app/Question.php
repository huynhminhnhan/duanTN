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
}
