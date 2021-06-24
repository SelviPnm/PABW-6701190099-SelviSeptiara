<?php

namespace App\Controllers;

use App\Models\SampahModel;

class Sampah extends BaseController
{
    protected $sampahModel;

    public function __construct()
    {
        $this->sampahModel = new SampahModel();
    }

    public function index()
    {
        $sampah = $this->sampahModel->findAll();
        $data = [
            'title' => 'Daftar Sampah',
            'sampah' => $sampah
        ];

        return view('sampah/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Sampah'
        ];

        return view('sampah/create', $data);
    }

    public function save()
    {


        $this->sampahModel->save([
            'wilayah' => $this->request->getVar('wilayah'),
            'jenis' => $this->request->getVar('jenis'),
            'berat' => $this->request->getVar('berat'),
            'tinggi' => $this->request->getVar('tinggi')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/sampah');
    }

    public function delete($id)
    {
        $this->sampahModel->delete($id);
        return redirect()->to('/sampah');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Sampah',
            'sampah' => $this->sampahModel->getIdValue($id)
        ];

        return view('sampah/edit', $data);
    }
}
