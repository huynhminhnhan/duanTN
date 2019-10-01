<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $table='department';
    protected $primaryKey = 'id';

    function showAll(){
        $result = department::all();
        return $result;
    }
}
