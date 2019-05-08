<?php
/**
 * Created by PhpStorm.
 * User: HGX
 * Date: 30/04/2019
 * Time: 04:56 PM
 */

namespace App\Http\Data\Configuracion;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class logeo extends Controller
{

    public static function logeo($usuario, $contrasenia)
    {
        $sql = "select usuario_id, usuario, contrasenia,correo_electronico
from usuario
where usuario = '" . $usuario . "'
  and contrasenia = '" . $contrasenia . "'";
        $Query = DB::select($sql);
        return $Query;
    }

    public static function registrar_session($token, $usuario)
    {

        DB::table('session')->insert(
            array('token' => $token,
                'estado' => 1,
                'usuario_id' => $usuario,
            ));
    }

    public static function destruir_session($token)
    {
        $query = "UPDATE session 
                  SET estado = 0 
                 WHERE token = '" . $token . "'";
        DB::update($query);
    }
}