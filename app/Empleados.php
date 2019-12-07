<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //
    protected $primaryKey = 'empleados';

    protected $fillable = [
        'id', 
        'nombre',
        'a_paterno',
        'a_materno',
        'fecha_nac'
    ];

}
