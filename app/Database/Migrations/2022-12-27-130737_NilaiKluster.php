<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NilaiKluster extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kluster' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'id_indikator' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
        ]);

        $this->forge->addForeignKey('id_kluster', 'kluster', 'id_kluster', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_indikator', 'indikator', 'id_indikator', 'CASCADE', 'CASCADE');

        $this->forge->createTable('nilai_kluster');
    }

    public function down()
    {
        $this->forge->dropTable('nilai_kluster');
    }
}
