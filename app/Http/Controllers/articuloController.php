<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Data\Articulo\ArticuloData;
use App\Http\Data\Util\Util;
use App\Articulo;

class articuloController extends Controller
{
    public function listar_articulos(Request $request)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            $response = ArticuloData::lista_articulo();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    public function registrar_articulo(Request $request)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            Articulo::create($request->all());
            $response = ArticuloData::lista_articulo();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);


    }

    public function listar_articulo(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            $response = Articulo::find($id);
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);

    }

    public function editar_articulo(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            Articulo::find($id)->update($request->all());
            $response = ArticuloData::lista_articulo();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }


    public function eliminar_articulo(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            Articulo::find($id)->delete();
            $response = ArticuloData::lista_articulo();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

}
