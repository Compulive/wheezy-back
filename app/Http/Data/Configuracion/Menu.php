<?php
/**
 * Created by PhpStorm.
 * User: HGX
 * Date: 01/05/2019
 * Time: 12:40 PM
 */

namespace App\Http\Data\Configuracion;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Menu extends Controller
{

    public static function listar_menu_padre($usuario)
    {
        $sql = "select modulo_id, modulo_nombre as title, modulo_icono as icon, modulo_nivel, modulo_url as path, Parent_modulo_id
from modulo
where Parent_modulo_id in (
  select Parent_modulo_id
  from modulo
  where modulo_id in (select rol_modulo_modulo_id
                      from rol_modulo
                      where rol_modulo_rol_id in (
                        select rol_usuario_rol_id
                        from rol_usuario
                        where rol_usuario_usuario_id = '" . $usuario . "'
                      ))

  group by modulo_id
  order by modulo_id
)
  and modulo_nivel = 1";
        $Query = DB::select($sql);
        return $Query;
    }

    public static function listar_menu_hijo($usuario, $parent)
    {
        $sql = "select modulo_nombre as title, modulo_icono as icon, modulo_nivel, modulo_url as path
from modulo
where modulo_id in (select rol_modulo_modulo_id
                    from rol_modulo
                    where rol_modulo_rol_id in (
                      select rol_usuario_rol_id
                      from rol_usuario
                      where rol_usuario_usuario_id = '" . $usuario . "'
                    ))
  and Parent_modulo_id = ' $parent '
  and modulo_nivel = 2
order by modulo_id";
        $Query = DB::select($sql);
        return $Query;
    }

}