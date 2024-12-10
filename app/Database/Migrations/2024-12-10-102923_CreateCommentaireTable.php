<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCommentaireTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_commentaire' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_video' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'id_utilisateur' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'texte_commentaire' => [
                'type' => 'TEXT',
            ],
            'date_commentaire' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_commentaire');
        $this->forge->addForeignKey('id_video', 'Video', 'id_video', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_utilisateur', 'Utilisateur', 'id_utilisateur', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Commentaire');
    }

    public function down()
    {
        $this->forge->dropTable('Commentaire');
    }
}
