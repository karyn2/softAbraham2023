<?php

namespace App\Models;

use CodeIgniter\Model;

class DocenteModel extends Model
{
    protected $table            = 'profesores';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'usuario_id',
        'fecha_nacimiento',
        'numero_telefono',
        'direccion_residencial',
        'fecha_inicio_empleo',
        'contacto_emergencia_id'
    ];

    

}
