<?php namespace App\Models;
use CodeIgniter\Model;

class usuarios extends Model{

    public function obtenerUsuario($data){
        $usuario = $this->db->table('usuarios');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }
}