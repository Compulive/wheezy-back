<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulo';
    public $timestamps = false;
    protected $primaryKey = 'articulo_id';
    protected $fillable = [
        'articulo_codigo',
        'articulo_nombre',
        'articulo_proveedor_id',
        'articulo_no_stock_item',
        'articulo_tipo_percenpcion_id',
        'articulo_tipo_detraccion_id',
        'articulo_codigo_ean',
        'articulo_codigo_barra_ventas',
        'articulo_codigo_barra_compras',
        'artitulo_um_compra_id',
        'articulo_um_venta_id',
        'articulo_factor_compra',
        'articulo_factor_venta',
        'articulo_peso',
        'articulo_volumen',
        'articulo_stock_minimo',
        'articulo_stock_maximo',
        'articulo_aplicar_isc',
        'articulo_porcentaje_isc',
        'articulo_cuenta_compras_id',
        'articulo_cuenta_venta_id',
        'articulo_cuenta_devolucion_id',
        'articulo_estado_id',
        'articulo_cuenta_isc',
        'articulo_fecha_ingreso',
        'articulo_ultima_compra',
        'articulo_ultimo_costo_promedio',
        'articulo_costo_promedio_soles',
        'articulo_costo_promedio_dolares',
        'articulo_imagen',
        'articulo_categoria1_id',
        'articulo_categoria2_id',
        'articulo_categoria3_id',
        'articulo_categoria4_id',
        'articulo_categoria5_id',
        'articulo_codigo_qr'];
}
