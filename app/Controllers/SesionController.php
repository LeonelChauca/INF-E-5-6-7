<?php

namespace App\Controllers;

use App\Models\Sesion_modelo;
use CodeIgniter\Controller;

class SesionController extends Controller
{
    public function index()
    {
        return view('Session_view');
    }
    public function login()
    {
        $correo = $this->request->getPost('correo');
        $usuarioModel = new Sesion_modelo();
        $usuarioValidado = $usuarioModel->where('correo', $correo)
                                         ->first();
        switch ($usuarioValidado['tipo']) {
            case "Director bancario":
                return redirect()->to('admin')->with('success',$usuarioValidado);
                break;
            case "Cliente":
                return redirect()->to('cliente')->with('success', $usuarioValidado);
                break;
            default:
                return redirect()->to('iniciarsesion')->with('error', 'Credenciales incorrectas. Por favor, inténtalo de nuevo.');
                break;
        }
    }

}