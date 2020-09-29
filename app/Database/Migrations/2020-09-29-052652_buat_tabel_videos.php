<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTabelVideos extends Migration
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
			'user_id' => [
				'type' => 'BIGINT',
				'constraint' => 20,
				'unsigned' => true,
			],
			'title'  => [
				'type' => 'VARCHAR',
				'constraint' => '128',
			],
			'desc' => [
				'type' => 'TEXT',
			],
			'likes' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'dislikes' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'video' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'deleted_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'is_suspended' => [
				'type' => 'BOOLEAN',
			]
			]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('user_id', 'users', 'id');
		$this->forge->createTable('videos');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('videos');
	}
}
