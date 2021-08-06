<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lk extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_lk'          => [
				'type'           => 'BIGINT',
				'constraint'     => 20,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'foto1'       => [
				'type' => 'TEXT',
				'null' => true,
			],
			'foto2'       => [
				'type' => 'TEXT',
				'null' => true,
			],
			'foto3'       => [
				'type' => 'TEXT',
				'null' => true,
			],
			'foto4'       => [
				'type' => 'TEXT',
				'null' => true,
			],
			'foto5'       => [
				'type' => 'TEXT',
				'null' => true,
			],
			'tanggal_input'       => [
				'type' => 'DATE',

			],
			'keterangan'       => [
				'type' => 'TEXT',
				'null' => true,

			],
		]);
		$this->forge->addKey('id_lk', true);
		$this->forge->createTable('lk');
	}

	public function down()
	{
		//
		$this->forge->dropTable('lk');
	}
}
