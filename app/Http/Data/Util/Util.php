<?php
/**
 * Created by PhpStorm.
 * User: HGX
 * Date: 01/05/2019
 * Time: 10:13 AM
 */

namespace App\Http\Data\Util;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Util extends Controller
{

    public static function autenticado($token = "")
    {
        $data = new \stdClass();
        try {
            $sql = "select token, estado, usuario_id
                    from session
                    where token = '" . $token . "'";
            $Query = DB::select($sql);
            if ($token == "" || count($Query) <= 0) {
                $data->message = "no autenticado";
                $data->success = false;
            } elseif (count($Query) <= 0 && $Query[0]->estado == 0) {
                $data->message = "Token Caducado";
                $data->success = false;
            } elseif (count($Query) >= 0 && $Query[0]->estado == 1) {
                $data->success = true;
                $data->message = "Token Correcto";
                $data->token = $Query[0]->token;
                $data->usuario_id = $Query[0]->usuario_id;
            }
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
        return $data;

    }

}