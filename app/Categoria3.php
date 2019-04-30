<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria3 extends Model
{
    protected $table = 'categoria3';
    public $timestamps = false;
    protected  $primaryKey = 'categoria3_id';
    protected $fillable = ['categoria3_id',
        'categoria3_codigo',
        'categoria3_descripcion',
        'categoria3_descripcion_corta',
        'categoria3_cat'];
}
