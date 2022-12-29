<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NilaiFasilitas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idbdt' => [
                'type'           => 'CHAR',
                'constraint'     => '16',
            ],
            'id_kategori' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'id_fasilitas' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
        ]);

        $this->forge->addForeignKey('idbdt', 'kluster', 'idbdt', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_kategori', 'kategori_fasilitas', 'id_kategori', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_fasilitas', 'fasilitas', 'id_fasilitas', 'CASCADE', 'CASCADE');

        $this->forge->createTable('nilai_fasilitas');
    }

    public function down()
    {
        $this->forge->dropTable('nilai_fasilitas');
    }
}
