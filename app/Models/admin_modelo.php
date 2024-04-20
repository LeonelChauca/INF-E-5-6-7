<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_modelo extends Model
{
    protected $tableP = 'persona';
    protected $tablaC = 'cuentaBancaria';

    public function obtenerMontosYSaldosPorDepartamento()
    {
        return $this->db->query("SELECT 
                                    CASE ".$this->tableP.".departamento
                                        WHEN 'La Paz' THEN 'La Paz'
                                        WHEN 'Oruro' THEN 'Oruro'
                                        WHEN 'Potosí' THEN 'Potosí'
                                        WHEN 'Cochabamba' THEN 'Cochabamba'
                                        WHEN 'Santa Cruz' THEN 'Santa Cruz'
                                        WHEN 'Beni' THEN 'Beni'
                                        WHEN 'Pando' THEN 'Pando'
                                        WHEN 'Tarija' THEN 'Tarija'
                                        WHEN 'Chuquisaca' THEN 'Chuquisaca'
                                        ELSE 'Otro'
                                    END AS departamento,
                                    SUM(".$this->tablaC.".saldo) AS saldo_total
                                FROM 
                                    ".$this->tableP."
                                JOIN 
                                    ".$this->tablaC." 
                                ON 
                                    ".$this->tableP.".persona_id = ".$this->tablaC.".persona_id
                                GROUP BY 
                                    ".$this->tableP.".departamento")->getResult();
    }
}
