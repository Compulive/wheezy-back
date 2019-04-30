<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticuloEstado;
class articuloEstadoController extends Controller
{
    public function listar_estados_articulo()
    {
        return response()->json(ArticuloEstado::all(), 201);
    }

    public function registrar_articulo_estado(Request $request)
    {
        ArticuloEstado::create($request->all());
        return response()->json(ArticuloEstado::all(), 201);
    }

    public function listar_articulo_estado($id)
    {
        return response()->json(ArticuloEstado::find($id), 201);
    }

    public function editar_articulo_estado(Request $request,$id){

        ArticuloEstado::find($id)->update($request->all());
        return response()->json(ArticuloEstado::all(), 201);
    }
    public function eliminar_articulo_estado($id){
        ArticuloEstado::find($id)->delete();
        return response()->json(ArticuloEstado::all(), 201);
    }
}
