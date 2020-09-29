<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTabelComments extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'BIGINT',
				'constraint' => 20,
				'unsigned' => true,
				'auto_increment' => true
			],
			'video_id' => [
				'type' => 'BIGINT',
				'constraint' => 20,
				'unsigned' => true
			],
			'user_id' => [
				'type' => 'BIGINT',
				'constraint' => 20,
				'unsigned' => true
			],
			'comment' => [
				'type' => 'TEXT'
			],
			'likes' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'dislikes' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'deleted_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'is_suspended' => [
				'type' => 'BOOLEAN'
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('video_id', 'videos', 'id');
		$this->forge->addForeignKey('user_id', 'users', 'id');
		$this->forge->createTable('comments');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('comments');
	}
}
