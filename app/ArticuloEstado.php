<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticuloEstado extends Model
{
    protected $table = 'articulo_estado';
    public $timestamps = false;
    protected  $primaryKey = 'articulo_estado_id';
    protected $fillable = ['articulo_estado_id',
        'articulo_estado_descripcion_corta',
        'articulo_estado_descripcion'];
}
