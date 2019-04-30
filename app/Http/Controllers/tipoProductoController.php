<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProducto;
class tipoProductoController extends Controller
{
    public function listar_tipo_productos()
    {
        return response()->json(TipoProducto::all(), 201);
    }

    public function listar_tipo_producto($id)
    {
        return response()->json(TipoProducto::find($id), 201);
    }

    public function registrar_tipo_producto(Request $request)
    {
        TipoProducto::create($request->all());
        return response()->json(TipoProducto::all(), 201);
    }


    public function editar_tipo_producto(Request $request,$id){

        TipoProducto::find($id)->update($request->all());
        return response()->json(TipoProducto::all(), 201);
    }
    public function eliminar_tipo_producto($id){
        TipoProducto::find($id)->delete();
        return response()->json(TipoProducto::all(), 201);
    }
}
