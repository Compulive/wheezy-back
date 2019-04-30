<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria2;
class categoria2Controller extends Controller
{
    public function listar_categorias2()
    {
        return response()->json(Categoria2::all(), 201);
    }

    public function registrar_categoria2(Request $request)
    {
        Categoria2::create($request->all());
        return response()->json(Categoria2::all(), 201);
    }

    public function listar_catagoria2($id)
    {
        return response()->json(Categoria2::find($id), 201);
    }

    public function editar_categoria2(Request $request,$id){

        Categoria2::find($id)->update($request->all());
        return response()->json(Categoria2::all(), 201);
    }
    public function eliminar_categoria2($id){
        Categoria2::find($id)->delete();
        return response()->json(Categoria2::all(), 201);
    }
}
