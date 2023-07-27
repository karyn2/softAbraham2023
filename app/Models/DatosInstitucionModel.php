<?php

namespace App\Models;

use CodeIgniter\Model;

class DatosInstitucionModel extends Model
{
    protected $table            = 'datosinstitucion';
    protected $primaryKey       = 'codigoDane';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'nombre',
        'eslogan',
        'periodo',
        'telefono',
        'correo',
        'direccion',
        'jornada',
        'mision',
        'vision'
    ];

    

}