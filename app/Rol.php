<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    public $timestamps = false;
    protected $primaryKey = 'rol_id';
    protected $fillable = ['rol_nombre',
        'rol_estado'];
}
