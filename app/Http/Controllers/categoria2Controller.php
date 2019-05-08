<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria2;
use App\Http\Data\Util\Util;

class categoria2Controller extends Controller
{
    public function listar_categorias2(Request $request)
    {


        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            $response = Categoria2::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);


    }


/** metodo que registra una categoria
 @params:{nombre,codigo,}
 retorna : retorna una lista de
 */public function registrar_categoria2(Request $request)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            Categoria2::create($request->all());
            $response = Categoria2::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);


    }

    public function listar_catagoria2(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            $response = Categoria2::find($id);
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);

    }

    public function editar_categoria2(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            Categoria2::find($id)->update($request->all());
            $response = Categoria2::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);


    }

    public function eliminar_categoria2(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            Categoria2::find($id)->delete();

            $response = Categoria2::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }
}
