<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oficina;
class oficinaController extends Controller
{
    public function listar_oficinas()
    {
        return response()->json(Oficina::all(), 201);
    }

    public function listar_oficina($id)
    {
        return response()->json(Oficina::find($id), 201);
    }

    public function registrar_oficina(Request $request)
    {
        Oficina::create($request->all());
        return response()->json(Oficina::all(), 201);
    }


    public function editar_oficina(Request $request,$id){

        Oficina::find($id)->update($request->all());
        return response()->json(Oficina::all(), 201);
    }
    public function eliminar_oficina($id){
        Oficina::find($id)->delete();
        return response()->json(Oficina::all(), 201);
    }
}
