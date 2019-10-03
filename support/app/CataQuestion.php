<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CataQuestion extends Model
{
    public $table='CataQuestion';
    protected $primaryKey = 'id';

    public function get3Table($status,$user_info){
        $result = CataQuestion::join('question','CataQuestion.id' ,'=' ,'question.idCataQuestion')
                ->join('department', 'question.idDepartment', '=', 'department.id')
                ->where('Status',$status)
                ->where('id_user',$user_info)
                ->paginate(10);
        return $result;
        // CataQuestion.name as Dichvu', 'question.id as MaCauHoi', 'department.name as PhongBan', 'question.created_at As Time', 'question.Status as Status' , 'question.Title as Dichvu
    }
    public function searchQuestion($user_info,$query){
        $result = CataQuestion::join('question','CataQuestion.id' ,'=' ,'question.idCataQuestion')
                ->join('department', 'question.idDepartment', '=', 'department.id')
                ->where('id_user',$user_info)
                ->where('Content', 'LIKE', "%{$query}%")
                ->paginate(10);
        return $result;
        // CataQuestion.name as Dichvu', 'question.id as MaCauHoi', 'department.name as PhongBan', 'question.created_at As Time', 'question.Status as Status' , 'question.Title as Dichvu
    }
}
