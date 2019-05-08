<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Data\Util\Util;
use App\Http\Data\Configuracion\Menu;

class menuController extends Controller
{
    public function listar_menu(Request $request)
    {
        $menu = [];
        $menu_hijo = [];
        $autorizacion = Util::autenticado($request->header('Authorization'));
        if ($autorizacion->success) {
            $menu_padre = Menu::listar_menu_padre($autorizacion->usuario_id); // lista el menu padre
            foreach ($menu_padre as $key => $dataPadre) { // busca sus hijos por medio de "Parent_modulo_id"
                $dataPadre->extralink = false;
                $dataPadre->class = 'has-arrow';    // asigna una clase
                $submenu = Menu::listar_menu_hijo($autorizacion->usuario_id, $dataPadre->Parent_modulo_id); // realiza la consulta de los menu hijos
                foreach ($submenu as $keydata => $datahijo) { // recorre lo hijos
                    $datahijo->extralink = false;
                    $datahijo->submenu = [];
                    $datahijo->class = '';
                    array_push($menu_hijo, $datahijo); // arregla la lista "menu" para enviarlo al front
                }
                $dataPadre->submenu = $menu_hijo;

                array_push($menu, $dataPadre);
            }
            $response = $menu;
        } else {
            $response = $autorizacion;
        }
        return response()->json($response, 201);

    }
}
