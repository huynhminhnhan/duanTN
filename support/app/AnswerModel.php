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
}
