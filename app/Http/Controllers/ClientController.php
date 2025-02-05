<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function datosIne()
    {
        return view('modules.clients.request_ine');
    }

    public function datosIneStore() {}
    public function datosPersonales()
    {
        return view('modules.clients.datos_personales');
    }
    public function datosPersonalesStore() {}
}
