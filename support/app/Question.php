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
}
