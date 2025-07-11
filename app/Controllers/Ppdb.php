<?php

namespace App\Controllers;

class Ppdb extends BaseController
{
    public function index()
    {
        return view('formulir');
    }

    public function submit()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'asal_tk' => $this->request->getPost('asal_tk'),
            'jk' => $this->request->getPost('jk'),
            'agama' => $this->request->getPost('agama'),
            'ttl' => $this->request->getPost('ttl'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
        ];

        // Simpan ke database
        $db = \Config\Database::connect();
        $builder = $db->table('pendaftaran');
        $builder->insert($data);

        // Tampilkan hasil ke view
        return view('hasil', $data);
    }
}
