<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTabelUsers extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'BIGINT',
				'constraint' => 20,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'email'  => [
				'type' => 'VARCHAR',
				'constraint' => '128',
				'unique' => true,
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => '128',
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'role' => [
				'type' => 'ENUM',
				'constraint' => ['Outsider', 'UPI Fam', 'Administrator'],
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'status' => [
				'type' => 'ENUM',
				'constraint' => ['Active', 'Inactive', 'Blocked'],
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
