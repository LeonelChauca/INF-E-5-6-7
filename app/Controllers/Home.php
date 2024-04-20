<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $environment = env('CI_ENVIRONMENT');
        echo "Estás en el entorno: $environment";
        return view('hola');
    }
}
