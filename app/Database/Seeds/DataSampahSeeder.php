<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSampahSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'wilayah'       =>  'Telkom University',
				'jenis' 		=>  'Botol Plastik',
				'berat'       	=>  '2,3',
				'tinggi' 		=>  '2,1'
			],
			[
				'wilayah'       =>  'Sukapura',
				'jenis' 		=>  'Limbah Makanan',
				'berat'       	=>  '1,2',
				'tinggi'		=>  '1,1'
			]
		];
		$this->db->table('data_sampah')->insertBatch($data);
	}
}
