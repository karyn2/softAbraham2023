<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $documento="1085937260";
        $nombre="Angela Ceron";
        $correo="Karynaceron@gmail.com";
        $contrasenia = password_hash("1234", PASSWORD_DEFAULT);
        $rol="administrador";
        $data = [
            'documento' => $documento,
            'nombre' => $nombre,
            'correo' => $correo,
            'contrasenia' => $contrasenia,
            'rol'    => $rol,
        ];

        
        // Using Query Builder
        $this->db->table('usuarios')->insert($data);
    }
}
