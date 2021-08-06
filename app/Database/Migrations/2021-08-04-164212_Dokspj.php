<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dokspj extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_dokspj'          => [
				'type'           => 'BIGINT',
				'constraint'     => 20,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'kode_arsip'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
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
		$this->forge->addKey('id_dokspj', true);
		$this->forge->createTable('dokspj');
	}

	public function down()
	{
		//
		$this->forge->dropTable('dokspj');
	}
}
