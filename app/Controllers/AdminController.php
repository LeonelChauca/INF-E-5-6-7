<?php

namespace App\Controllers;

use App\Models\Admin_modelo;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $adminModelo = new Admin_modelo();
        $montosYSaldos = $adminModelo->obtenerMontosYSaldosPorDepartamento();
        $usuarioValidado = session()->getFlashData('success');
        return view('Admin_view', [
            'montosYSaldos' => $montosYSaldos,
            'usuarioValidado' => $usuarioValidado
        ]);
    }
}
