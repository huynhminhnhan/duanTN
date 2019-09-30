<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{   
     protected $table = 'account';

     protected $fillable = [
        'id','user_id', 'name', 'sex','phone','birthday', 'address', 'specialized', 'semester','status', 'avatar', 'department_id',
        ];
}
