<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    protected $table = 'ubigeo';
    public $timestamps = false;
    protected $primaryKey = 'ubigeo_id';
    protected $fillable = ['ubigeo_departamento',
        'ubigeo_provincia',
        'ubigeo_distrito'];
}
