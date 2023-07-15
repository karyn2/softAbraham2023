<?php
//https://www.youtube.com/watch?v=Y64R1uBEPjs&list=PLoRfWwOOv4jz3IR-R7u-B1KyYpuXhJIna&index=3
//ahi me quede
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'documento' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'correo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'contrasenia' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'rol' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
