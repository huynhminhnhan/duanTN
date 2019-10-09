<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $table='account';
    protected $primaryKey = 'id_account';
    protected $fillable = [
        'user_id','name','avatar','sex' ,'status','department_id'
    ];
    // connect 2 table answer va account 
    public function connectAnswerAccount($id_question){
        $result = Account::join('Answer', 'account.user_id' , '=' , 'Answer.id_people')
                ->where('Answer.id_question', $id_question)
                ->get();
        return $result;
    } 
}
