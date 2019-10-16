<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CataQuestion extends Model
{
    public $table='CataQuestion';
    protected $primaryKey = 'id';

    public function get3Table($status,$user_info){
        $result = CataQuestion::join('question','CataQuestion.id' ,'=' ,'question.idCataQuestion')
                ->join('department', 'question.idDepartment', '=', 'department.id_department')
                ->where('Status',$status)
                ->where('id_user',$user_info)
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
    
}
