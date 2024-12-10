<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVideoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_video' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'titre_video' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'lien_video' => [
                'type' => 'TEXT',
            ],
            'id_playlist' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_video');
        $this->forge->addForeignKey('id_playlist', 'Playlist', 'id_playlist', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Video');
    }

    public function down()
    {
        $this->forge->dropTable('Video');
    }
}
