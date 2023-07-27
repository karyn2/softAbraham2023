<?php namespace App\Models;
use CodeIgniter\Model;

class usuarios extends Model{

    protected $table            = 'usuarios';
    protected $primaryKey       = 'id_usuario';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_usuario, documento', 'nombre','correo','contrasenia','rol','estado'];

    public function obtenerUsuario($data){
        $usuario = $this->db->table('usuarios');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }
    




















    
    public function actualizarUsuario($idUsuario, $data) {
        $usuario = $this->db->table('usuarios');
        $usuario->set($data); // Utilizamos set() para establecer los nuevos datos
        $usuario->where($this->primaryKey, $idUsuario); // Utilizamos $this->primaryKey para referenciar la clave primaria
        return $usuario->update();
    }
    

}