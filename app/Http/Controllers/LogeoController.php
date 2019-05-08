<?php
/**
 * Created by PhpStorm.
 * User: HGX
 * Date: 30/04/2019
 * Time: 05:00 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Data\Configuracion\logeo;

class LogeoController extends Controller
{

    public function logeo_sistema(Request $request)
    {
        $usuario = $request->input('usuario');
        $contrasenia = $request->input('contrasenia');
        $logeo = logeo::logeo($usuario, $contrasenia);
        if (count($logeo) > 0) {
            $token = str_random(64);
            logeo::registrar_session($token, $logeo[0]->usuario_id);
            $mensaje = "acceso correcto";
            $jResponse['success'] = true;
        } else {
            $mensaje = "acceso incorrecto";
            $jResponse['success'] = false;
        }
        $jResponse['message'] = $mensaje;
        $jResponse['token'] = $token;
        $jResponse['data'] = $logeo[0];
        return response()->json($jResponse, 200);
    }

    public function salir_sistema(Request $request)
    {
        logeo::destruir_session($request->header('Authorization'));
        $mensaje = "correcto";
        $jResponse['success'] = true;
        $jResponse['message'] = $mensaje;
        return response()->json($jResponse, 200);
    }


}