<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Indikator extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_indikator' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_indikator' => [
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

        $this->forge->addForeignKey('id_kategori', 'kategori_indikator', 'id_kategori', 'CASCADE', 'CASCADE');

        $this->forge->addKey('id_indikator', true);
        $this->forge->createTable('indikator');
    }

    public function down()
    {
        $this->forge->dropTable('indikator');
    }
}
