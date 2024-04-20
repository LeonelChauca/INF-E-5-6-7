<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class ClienteController extends Controller
{
    public function index()
    {
        $usuarioValidado = session()->getFlashData('success');

        return view('Cliente_view', ['usuarioValidado' => $usuarioValidado]);
    }
}