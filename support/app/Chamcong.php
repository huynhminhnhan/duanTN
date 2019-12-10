<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamcong extends Model
{
    public $table='chamcong';
    protected $primaryKey = 'id_chamcong';
    protected $fillable = [
        'id_user','ngay','gio_vao1','gio_ra1' ,'gio_vao2','gio_ra2','ghi_chu'
    ];
}
