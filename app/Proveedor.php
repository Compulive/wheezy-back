<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'proveedor';
    public $timestamps = false;
    protected $primaryKey = 'proveedor_id';
    protected $fillable = ['proveedor_id',
        'proveedor_ruc',
        'proveedor_nombre',
        'proveedor_importacion',
        'proveedor_estado_id',
        'proveedor_email',
        'proveedor_telefono',
        'proveedor_direccion',
        'proveedor_cuenta_contable_id',
        'proveedor_agente_retencion',
        'proveedor_ubigeo_id',
        'proveedor_cuenta_soles',
        'proveedor_cuenta_dolares',
        'proveedor_forma_pago_id',
        'proveedor_exonerado_igv'];

}
