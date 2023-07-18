<?php namespace App\Models;
use CodeIgniter\Model;

class usuarios extends Model{

    protected $table            = 'usuarios';
    protected $primaryKey       = 'id_usuario';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['documento', 'nombre','correo','contrasenia','rol','estado'];

    public function obtenerUsuario($data){
        $usuario = $this->db->table('usuarios');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }
}