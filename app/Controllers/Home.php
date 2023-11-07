<?php

namespace App\Controllers;

use App\Models\loginModelo;

class Home extends BaseController
{
    public function index()
    {
        return view('home/paginaPrincipal');
    }

    public function cargarSob()
    {
        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('home/spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        $variable['vista'] = view('spHeader');

        return view('spSobreNosotros', $variable);
    }

    public function cargarMan()
    {
        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('home/spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        $variable['vista'] = view('spHeader');
        return view('spManual', $variable);
    }

    public function cargarConfUsu()
    {
        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('home/spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        $idUsuario = session('idUser');

        $loginModelo = new loginModelo();
        $variable['consulta'] = $loginModelo->sqlUsuario($idUsuario);

        $variable['vista'] = view('spHeader');
        return view('spConfiguracionUsuario', $variable);
    }

    public function sobreNosotros()
    {
        return view('home/sobreNosotros');
    }

    public function manual()
    {
        return view('home/manual');
    }
}