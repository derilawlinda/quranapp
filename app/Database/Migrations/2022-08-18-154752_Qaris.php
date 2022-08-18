<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Qaris extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('qaris');
    }

    public function down()
    {
        //
    }
}
