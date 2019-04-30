<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ubigeo;
class ubigeoController extends Controller
{
    public function listar_ubigeos()
    {
        return response()->json(Ubigeo::all(), 201);
    }

    public function listar_ubigeo($id)
    {
        return response()->json(Ubigeo::find($id), 201);
    }

    public function registrar_ubigeo(Request $request)
    {
        Ubigeo::create($request->all());
        return response()->json(Ubigeo::all(), 201);
    }


    public function editar_ubigeo(Request $request,$id){

        Ubigeo::find($id)->update($request->all());
        return response()->json(Ubigeo::all(), 201);
    }
    public function eliminar_ubigeo($id){
        Ubigeo::find($id)->delete();
        return response()->json(Ubigeo::all(), 201);
    }

}
