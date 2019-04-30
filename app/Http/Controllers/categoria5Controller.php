<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria5;
class categoria5Controller extends Controller
{
    public function listar_categorias5()
    {
        return response()->json(Categoria5::all(), 201);
    }

    public function registrar_categoria5(Request $request)
    {
        Categoria5::create($request->all());
        return response()->json(Categoria5::all(), 201);
    }

    public function listar_catagoria5($id)
    {
        return response()->json(Categoria5::find($id), 201);
    }

    public function editar_categoria5(Request $request,$id){

        Categoria5::find($id)->update($request->all());
        return response()->json(Categoria5::all(), 201);
    }
    public function eliminar_categoria5($id){
        Categoria5::find($id)->delete();
        return response()->json(Categoria5::all(), 201);
    }

}
