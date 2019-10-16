<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $table='account';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id','name','avatar','sex' ,'status','department_id'
    ];
   
}
