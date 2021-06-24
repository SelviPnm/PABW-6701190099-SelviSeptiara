<?php

namespace App\Models;

use CodeIgniter\Model;

class SampahModel extends Model
{
    protected $table = 'data_sampah';
    protected $allowedFields = ['wilayah', 'jenis', 'berat', 'tinggi'];
}
