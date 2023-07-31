<?php 
namespace App\Models;

use CodeIgniter\Model;

class AsignaturaLogroModel extends Model{
    protected $table = 'asignaturaLogro';
    protected $primaryKey = 'id_asignatura_logro';
    protected $allowedFields = [
        'curso_asignatura_id',
        'logro_id',
        'porcentaje',
    ];

    // Relación con la tabla "cursosAsignatura"
    public function cursoAsignatura()
    {
        return $this->belongsTo('App\Models\CursoAsignaturaModel', 'curso_asignatura_id', 'id_curso_asignatura');
    }

    // Relación con la tabla "logro"
    public function logro()
    {
        return $this->belongsTo('App\Models\LogroModel', 'logro_id', 'id_logro');
    }

    // Relación con la tabla "notas"
    public function notas()
    {
        return $this->hasMany('App\Models\NotasModel', 'asignatura_logro_id', 'id_asignatura_logro');
    }
}