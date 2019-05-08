<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;
use App\Http\Data\Util\Util;

class rolController extends Controller
{
    public function listar_roles(Request $request)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            $response = Rol::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    public function registrar_rol(Request $request)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            Rol::create($request->all());
            $response = Rol::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    public function listar_rol(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            $response = Rol::find($id);
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    public function editar_rol(Request $request, $id)
    {

        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            Rol::find($id)->update($request->all());
            $response = Rol::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    public function eliminar_rol(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            Rol::find($id)->delete();
            $response = Rol::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }
}
