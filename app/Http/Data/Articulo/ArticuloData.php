<?php
/**
 * Created by PhpStorm.
 * User: HGX
 * Date: 02/05/2019
 * Time: 04:50 PM
 */

namespace App\Http\Data\Articulo;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ArticuloData extends Controller
{

    public static function lista_articulo()
    {
        $sql = "select a.articulo_id,
       a.articulo_codigo,
       a.articulo_nombre,
       a.articulo_no_stock_item,
       a.articulo_codigo_ean,
       a.articulo_codigo_barra_ventas,
       a.articulo_codigo_barra_compras,
       a.articulo_factor_compra,
       a.articulo_factor_venta,
       a.articulo_peso,
       a.articulo_volumen,
       a.articulo_stock_minimo,
       a.articulo_stock_maximo,
       a.articulo_aplicar_isc,
       a.articulo_porcentaje_isc,
       a.articulo_fecha_ingreso,
       a.articulo_ultima_compra,
       a.articulo_ultimo_costo_promedio,
       a.articulo_costo_promedio_soles,
       a.articulo_costo_promedio_dolares,
       a.articulo_imagen,
       (select proveedor_nombre from proveedor where proveedor_id = a.articulo_proveedor_id) as proveedor_nombre,
       (select tipo_detraccion_nombre
        from tipo_detraccion
        where tipo_detraccion_id = a.articulo_tipo_percenpcion_id)                           as tipo_detraccion_nombre,
       (select tipo_detraccion_nombre
        from tipo_detraccion
        where tipo_detraccion_id = a.articulo_tipo_detraccion_id)                            as tipo_detraccion_nombre,
       (select unidad_medida_descripcion
        from unidad_medida
        where unidad_medida_id = a.artitulo_um_compra_id)                                    as artitulo_um_compra,
       (select unidad_medida_descripcion
        from unidad_medida
        where unidad_medida_id = a.articulo_um_venta_id)                                     as artitulo_um_venta,
       (select cuenta_contable_nombre
        from cuenta_contable
        where cuenta_contable_id = a.articulo_cuenta_compras_id)                             as articulo_cuenta_compras,
       (select cuenta_contable_nombre
        from cuenta_contable
        where cuenta_contable_id = a.articulo_cuenta_venta_id)                               as articulo_cuenta_venta,
       (select cuenta_contable_nombre
        from cuenta_contable
        where cuenta_contable_id = a.articulo_cuenta_devolucion_id)                          as articulo_cuenta_devolucion,
       (select articulo_estado_descripcion
        from articulo_estado
        where articulo_estado_id = a.articulo_estado_id)                                     as articulo_estado,
       (select cuenta_contable_nombre
        from cuenta_contable
        where cuenta_contable_id = a.articulo_cuenta_isc)                                    as articulo_cuenta_isc,
       (select categoria1_descripcion
        from categoria1
        where categoria1_id = a.articulo_categoria1_id)                                      as articulo_categoria1,
       (select categoria2_descripcion
        from categoria2
        where categoria2_id = a.articulo_categoria2_id)                                      as articulo_categoria2,
       (select categoria3_descripcion
        from categoria3
        where categoria3_id = a.articulo_categoria3_id)                                      as articulo_categoria3,
       (select categoria4_descripcion
        from categoria4
        where categoria4_id = a.articulo_categoria4_id)                                      as articulo_categoria4,
       (select categoria5_descripcion
        from categoria5
        where categoria5_id = a.articulo_categoria5_id)                                      as articulo_categoria5,
       a.articulo_codigo_qr
from articulo as a";
        $Query = DB::select($sql);
        return $Query;
    }
}