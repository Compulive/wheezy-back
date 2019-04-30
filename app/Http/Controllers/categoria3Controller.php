<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria3;
class categoria3Controller extends Controller
{
    public function listar_categorias3()
    {
        return response()->json(Categoria3::all(), 201);
    }

    public function registrar_categoria3(Request $request)
    {
        Categoria3::create($request->all());
        return response()->json(Categoria3::all(), 201);
    }

    public function listar_catagoria3($id)
    {
        return response()->json(Categoria3::find($id), 201);
    }

    public function editar_categoria3(Request $request,$id){

        Categoria3::find($id)->update($request->all());
        return response()->json(Categoria3::all(), 201);
    }
    public function eliminar_categoria3($id){
        Categoria3::find($id)->delete();
        return response()->json(Categoria3::all(), 201);
    }
}
