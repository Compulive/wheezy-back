<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria2 extends Model
{
    protected $table = 'categoria2';
    public $timestamps = false;
    protected  $primaryKey = 'categoria2_id';
    protected $fillable = ['categoria2_id',
        'categoria2_codigo',
        'categoria2_descripcion',
        'categoria2_descripcion_corta',
        'categoria2_cat'];

}
