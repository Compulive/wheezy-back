<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Almacen;
use App\Http\Data\Util\Util;

class almacenController extends Controller
{
    public function listar_almacenes(Request $request)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            $response = $this->listar_almacenes_data();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    public function listar_almacen(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            $response = Almacen::find($id);
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    public function registrar_almacen(Request $request)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            Almacen::create($request->all());
            $response = $this->listar_almacenes_data();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    public function editar_almacen(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            Almacen::find($id)->update($request->all());
            $response = $this->listar_almacenes_data();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    public function eliminar_almacen(Request $request, $id)
    {
        $autorizacion = Util::autenticado($request->header('Authorization'));

        if ($autorizacion->success) {
            Almacen::find($id)->delete();
            $response = $this->listar_almacenes_data();
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);
    }

    private function listar_almacenes_data()
    {
        $lista_alcen = [];
        foreach (Almacen::select('almacen.almacen_id', 'almacen.almacen_nombre',
            'almacen.almacen_direccion',
            'almacen.almacen_telefono',
            'almacen.almacen_estado',
            'almacen_emisor_sunat',
            'oficina.oficina_nombre')
                     ->join('oficina', 'almacen.almacen_oficina_id', '=', 'oficina.oficina_id')
                     ->get() as $key => $data) {
            if ($data->almacen_estado == 1) {
                $data->almacen_estado = true;
            } else {
                $data->almacen_estado = false;
            }
            if ($data->almacen_emisor_sunat == 1) {
                $data->almacen_emisor_sunat = true;
            } else {
                $data->almacen_emisor_sunat = false;
            }
            array_push($lista_alcen, $data);
        }
        return $lista_alcen;

    }
}
