<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarioModel = new \App\Models\Usuario_modelo();
        $cuentas = $usuarioModel->obtenerTodasCuentas();

        return view('Usuario_view', ['cuentas' => $cuentas]);
    }
    public function eliminar()
    {
        $request = $this->request;
        $id_cuenta = $request->getPost('cbancaria_id');
        if (!empty($id_cuenta)) {
            $usuarioModel = new \App\Models\Usuario_modelo();
            $deleted = $usuarioModel->eliminarCuenta($id_cuenta);
            if ($deleted) {
                return redirect()->to('usuario')->with('success', 'La cuenta se eliminó correctamente.');
            } else {
                return redirect()->to('usuario')->with('error', 'No se pudo eliminar la cuenta.');
            }
        } else {
            return redirect()->to('usuario')->with('error', 'ID de cuenta inválido.');
        }
    }
}