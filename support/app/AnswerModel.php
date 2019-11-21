<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerModel extends Model
{
    public $table='Answer';
    protected $primaryKey = 'id_Answer';

    public function getNewAnswer(){
        $result = AnswerModel::orderBy('Answer.id_Answer', 'DESC')
                ->Limit(1)->get();
        return $result;
    }

    public function getAnswerFlQs($id_question,$id_user){
        $result = AnswerModel::orderBy('Answer.id_Answer', 'ASC')
                ->where('Answer.id_question', $id_question)
                ->where('Answer.id_people',$id_user)
                ->get();
        return $result;
    }
}
