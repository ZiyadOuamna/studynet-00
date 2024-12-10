<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePlaylistTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_playlist' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'titre_playlist' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'id_domaine' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_playlist');
        // $this->forge->addForeignKey('id_domaine', 'Domaine', 'id_domaine', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Playlist');
    }

    public function down()
    {
        $this->forge->dropTable('Playlist');
    }
}
