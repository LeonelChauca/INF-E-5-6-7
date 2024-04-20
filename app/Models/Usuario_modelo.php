<?php
namespace App\Models;

use CodeIgniter\Model;

class Usuario_modelo extends Model
{
    protected $table = 'cuentaBancaria';
    protected $primaryKey = 'cbancaria_id'; 
    protected $allowedFields = ['cbancaria_id', 'numero_cuenta', 'saldo','persona_id','tipo'];
    public function obtenerTodasCuentas()
    {
        return $this->findAll();
    }
    public function eliminarCuenta($id_cuenta)
    {
        return $this->where('cbancaria_id', $id_cuenta)->delete();
    }
}



