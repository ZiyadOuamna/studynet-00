<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUtilisateurTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_utilisateur' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true,
            ],
            'mot_de_passe' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'role' => [
                'type'       => 'ENUM',
                'constraint' => ['etudiant', 'admin'],
                'default'    => 'etudiant',
            ],
        ]);
        $this->forge->addPrimaryKey('id_utilisateur');
        $this->forge->createTable('Utilisateur');
    }

    public function down()
    {
        $this->forge->dropTable('Utilisateur');
    }
}
