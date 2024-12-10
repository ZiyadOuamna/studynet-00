<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgressionTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_progression' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_utilisateur' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'id_playlist' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'progression' => [
                'type'    => 'FLOAT',
                'default' => 0,
            ],
        ]);
        $this->forge->addPrimaryKey('id_progression');
        // $this->forge->addForeignKey('id_utilisateur', 'Utilisateur', 'id_utilisateur', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('id_playlist', 'Playlist', 'id_playlist', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Progression');
    }

    public function down()
    {
        $this->forge->dropTable('Progression');
    }
}
