<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rkadpa extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_rkadpa'          => [
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
		$this->forge->addKey('id_rkadpa', true);
		$this->forge->createTable('rkadpa');
	}

	public function down()
	{
		//
		$this->forge->dropTable('rkadpa');
	}
}
