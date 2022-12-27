<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kluster extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kluster' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'idbdt' => [
                'type'           => 'CHAR',
                'constraint'     => '16',
            ],
            'id_kabupaten' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
        ]);

        $this->forge->addForeignKey('id_kabupaten', 'kabupaten', 'id_kabupaten', 'CASCADE', 'CASCADE');

        $this->forge->addKey('id_kluster', true);
        $this->forge->createTable('kluster');
    }

    public function down()
    {
        $this->forge->dropTable('kluster');
    }
}
