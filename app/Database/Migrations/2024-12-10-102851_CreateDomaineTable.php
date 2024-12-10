<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDomaineTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_domaine' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom_domaine' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_domaine');
        $this->forge->createTable('Domaine');
    }

    public function down()
    {
        $this->forge->dropTable('Domaine');
    }
}
