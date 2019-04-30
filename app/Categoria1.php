<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria1 extends Model
{
    protected $table = 'categoria1';
    public $timestamps = false;
    protected  $primaryKey = 'categoria1_id';
    protected $fillable = ['categoria1_id', 'categoria1_codigo', 'categoria1_descripcion','categoria1_descripcion_corta'];

}
