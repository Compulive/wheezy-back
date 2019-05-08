<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Http\Data\Util\Util;

class proveedorController extends Controller
{
    public function listar_proveedores(Request $request)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            $response = Proveedor::all();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }
}
