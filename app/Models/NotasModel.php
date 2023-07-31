<?php 
namespace App\Models;

use CodeIgniter\Model;

class NotasModel extends Model{
    protected $table = 'notas';
    protected $primaryKey = 'id_nota';
    protected $allowedFields = [
        'estudiante_id',
        'asignatura_logro_id',
        'nota',
    ];

    // Relación con la tabla "estudiantes"
    public function estudiante()
    {
        return $this->belongsTo('App\Models\EstudianteModel', 'estudiante_id', 'id_Estudiante');
    }

    // Relación con la tabla "asignaturaLogro"
    public function asignaturaLogro()
    {
        return $this->belongsTo('App\Models\AsignaturaLogroModel', 'asignatura_logro_id', 'id_asignatura_logro');
    }
}