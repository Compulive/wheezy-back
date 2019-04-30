<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria4;
class categoria4Controller extends Controller
{
    public function listar_categorias4()
    {
        return response()->json(Categoria4::all(), 201);
    }

    public function registrar_categoria4(Request $request)
    {
        Categoria4::create($request->all());
        return response()->json(Categoria4::all(), 201);
    }

    public function listar_catagoria4($id)
    {
        return response()->json(Categoria4::find($id), 201);
    }

    public function editar_categoria4(Request $request,$id){

        Categoria4::find($id)->update($request->all());
        return response()->json(Categoria4::all(), 201);
    }
    public function eliminar_categoria4($id){
        Categoria4::find($id)->delete();
        return response()->json(Categoria4::all(), 201);
    }
}
