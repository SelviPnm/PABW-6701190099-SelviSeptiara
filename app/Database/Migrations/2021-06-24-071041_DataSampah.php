<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataSampah extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'wilayah'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'jenis'       => [
				'type'              => 'VARCHAR',
				'constraint'        => "128",
			],
			'berat' => [
				'type'           => 'DECIMAL',
				'constraint'     => '3,1',
			],
			'tinggi' => [
				'type'           => 'DECIMAL',
				'constraint'     => '3,1',
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('data_sampah');
	}

	public function down()
	{
		$this->forge->dropTable('data_sampah');
	}
}
