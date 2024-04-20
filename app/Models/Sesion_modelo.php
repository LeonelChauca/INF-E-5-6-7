<?php
namespace App\Models;

use CodeIgniter\Model;

class Sesion_modelo extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'persona_id'; 
    protected $allowedFields = ['persona_id', 'nombre', 'ap_paterno','ap_materno','correo','tipo'];

}
