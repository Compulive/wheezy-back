<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria1;


class categoria1Controller extends Controller
{
    public function listar_categorias1()
    {
        return response()->json(Categoria1::all(), 201);
    }

    public function registrar_categoria1(Request $request)
    {
        Categoria1::create($request->all());
        return response()->json(Categoria1::all(), 201);
    }

    public function listar_catagoria1($id)
    {
        return response()->json(Categoria1::find($id), 201);
    }

    public function editar_categoria1(Request $request,$id){

        Categoria1::find($id)->update($request->all());
        return response()->json(Categoria1::all(), 201);
    }
    public function eliminar_categoria1($id){
        Categoria1::find($id)->delete();
        return response()->json(Categoria1::all(), 201);
    }
}
