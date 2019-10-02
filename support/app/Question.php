<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Role;
class Question extends Model
{
    public $table='question';
    protected $primaryKey = 'id';

    
    public function questionNew($status){
        
        $result = Question::orderBy('id','desc')
                ->where('Status',$status)
                ->get();
        return $result;
    }
    public function questionConnect($status,$user_info){
        $result = Question::join ('CataQuestion', 'Question.idCataQuestion' , '=', 'CataQuestion.id')
                ->orderBy('Question.id','desc')
                ->where('Status',$status)
                ->where('id_user',$user_info)
                ->get(CataQuestion.name);
        return $result;
        // 'CataQuestion.name' as 'Dichvu', 'question.id' as 'MaCauHoi', 'department.name' as 'PhongBan', 'question.created_at' As 'Time', 'question.Status' as 'Status' , 'question.Title' as 'Dichvu'
    }
}
