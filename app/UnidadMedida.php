<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    protected $table = 'unidad_medida';
    public $timestamps = false;
    protected  $primaryKey = 'unidad_medida_id';
    protected $fillable = ['unidad_medida_id',
        'unidad_medida_descripcion',
        'unidad_medida_descripcion_corta',
        'unidad_medida_codigo_sunat'];
}
