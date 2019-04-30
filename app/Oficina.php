<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    protected $table = 'oficina';
    public $timestamps = false;
    protected $primaryKey = 'oficina_id';
    protected $fillable = ['oficina_nombre',
        'oficina_direccion',
        'oficina_ubigeo',
        'oficina_telefono',
        'oficina_responsable',
        'oficina_observacion'];
}
