<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fasilitas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_fasilitas' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_fasilitas' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nilai' => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'id_kategori' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
        ]);

        $this->forge->addForeignKey('id_kategori', 'kategori_fasilitas', 'id_kategori', 'CASCADE', 'CASCADE');

        $this->forge->addKey('id_fasilitas', true);
        $this->forge->createTable('fasilitas');
    }

    public function down()
    {
        $this->forge->dropTable('fasilitas');
    }
}
