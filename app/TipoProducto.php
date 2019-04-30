<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $table = 'tipo_producto';
    public $timestamps = false;
    protected $primaryKey = 'tipo_producto_id';
    protected $fillable = ['tipo_producto_id',
        'tipo_producto_descripcion'];
}
