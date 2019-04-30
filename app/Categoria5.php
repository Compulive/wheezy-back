<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria5 extends Model
{
    protected $table = 'categoria5';
    public $timestamps = false;
    protected  $primaryKey = 'categoria5_id';
    protected $fillable = ['categoria5_id',
        'categoria5_codigo',
        'categoria5_descripcion',
        'categoria5_descripcion_corta',
        'categoria5_cat'];
}
