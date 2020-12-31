<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableSiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'nis' => [
				'type' => 'VARCHAR',
				'constraint' => 8,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'tgl_lahir' => [
				'type' => 'DATE'
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addUniqueKey('nis');
		$this->forge->createTable('siswa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('siswa');
	}
}