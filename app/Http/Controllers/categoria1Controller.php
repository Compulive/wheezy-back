<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria1;
use App\Http\Data\Util\Util;


class categoria1Controller extends Controller
{
    public function listar_categorias1(Request $request)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            $response = Categoria1::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    public function registrar_categoria1(Request $request)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            Categoria1::create($request->all());
            $response = Categoria1::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    public function listar_catagoria1(Request $request, $id)


    {
        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            $response = Categoria1::find($id);
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);


    }

    public function editar_categoria1(Request $request, $id)
    {


        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            Categoria1::find($id)->update($request->all());
            $response = Categoria1::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);

    }

    public function eliminar_categoria1(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            Categoria1::find($id)->delete();

            $response = Categoria1::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }
}
