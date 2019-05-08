<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'almacen';
    public $timestamps = false;
    protected $primaryKey = 'almacen_id';
    protected $fillable = ['almacen_nombre',
        'almacen_oficina_id',
        'almacen_direccion',
        'almacen_telefono',
        'almacen_estado',
        'almacen_emisor_sunat'];
}
