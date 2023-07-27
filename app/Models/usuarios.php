<?php namespace App\Models;
use CodeIgniter\Model;

class usuarios extends Model{

    protected $table            = 'usuarios';
    protected $primaryKey       = 'id_usuario';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['documento', 'nombre','correo','contrasenia','rol','estado'];
        // Relación uno a uno con la tabla 'profesores'
    protected $hasOne = [
           'profesor' => [
           'model' => 'App\Models\ProfesoresModel',
           'foreign_key' => 'usuario_id',
            'local_key' => 'id_usuario'
        ]
    ];  
    public function buscarPorDocumento($documento)
    {
        // Realiza la búsqueda del usuario por su número de documento y verifica el estado y el rol.
        // Reemplaza 'documento' con el nombre del campo en tu tabla, y 'docente' con el valor del rol de docente.
        return $this->where('documento', $documento)
                    ->where('estado', 1)
                    ->where('rol', 'docente')
                    ->first();
    }  
   
    public function obtenerUsuario($data){
        $usuario = $this->db->table('usuarios');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }


}