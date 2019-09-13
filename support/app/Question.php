<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $table='question';
    protected $primaryKey = 'id';

    function get_request(){

    }
}
