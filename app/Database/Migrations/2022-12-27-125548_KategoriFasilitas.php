<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoriFasilitas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategori' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);

        $this->forge->addKey('id_kategori', true);
        $this->forge->createTable('kategori_fasilitas');
    }

    public function down()
    {
        $this->forge->dropTable('kategori_fasilitas');
    }
}
