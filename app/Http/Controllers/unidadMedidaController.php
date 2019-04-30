<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UnidadMedida;
class unidadMedidaController extends Controller
{
    public function listar_unidades_medida()
    {
        return response()->json(UnidadMedida::all(), 201);
    }

    public function registrar_unidad_medida(Request $request)
    {
        UnidadMedida::create($request->all());
        return response()->json(UnidadMedida::all(), 201);
    }

    public function listar_unidad_medida($id)
    {
        return response()->json(UnidadMedida::find($id), 201);
    }

    public function editar_unidad_medida(Request $request,$id){

        UnidadMedida::find($id)->update($request->all());
        return response()->json(UnidadMedida::all(), 201);
    }
    public function eliminar_unidad_medida($id){
        UnidadMedida::find($id)->delete();
        return response()->json(UnidadMedida::all(), 201);
    }

}
