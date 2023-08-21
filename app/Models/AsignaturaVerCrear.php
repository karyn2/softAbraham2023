<?php

namespace App\Models;

use CodeIgniter\Model;

class AsignaturaVerCrear extends Model
{
    
    protected $table            = 'asignaturas';
    protected $primaryKey       = 'id_asignatura';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['area_asignatura','descripcion_asignatura','estado_asignatura'];

    
}
