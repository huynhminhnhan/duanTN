<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    public function questionConnect($status){
        
        $result = Question::join ('CataQuestion', 'Question.idCataQuestion' , '=', 'CataQuestion.id')
                ->orderBy('Question.id','desc')
                ->where('Status',$status)
                ->get();
        return $result;
    }
}
