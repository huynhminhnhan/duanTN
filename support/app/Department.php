<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $table='department';
    protected $primaryKey = 'id';

    public function getAll(){
        $result = Department::all();
        return $result;
    }
}
