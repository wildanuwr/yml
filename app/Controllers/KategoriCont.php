<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class KategoriCont extends BaseController
{
    public function index()
    {
        // Menampilkan form untuk tambah kategori dan produk
        return view('C_Kategori');
    }

    public function store()
    {
        $kategoriModel = new KategoriModel();

        // Validasi input kategori dan produk
        $validation = $this->validate([
            'nama_kategori' => 'required',
            'nama_produk.*' => 'required'  // validasi untuk semua produk
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Ambil semua produk yang diinput oleh user
        $produkList = $this->request->getPost('nama_produk');

        // Gabungkan produk menjadi string, dipisahkan oleh koma
        $produkString = implode(', ', $produkList);

        // Simpan kategori dan produk dalam satu record
        $kategoriData = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'nama_produk' => $produkString
        ];

        $kategoriModel->insert($kategoriData);

        return redirect()->to('/kategori')->with('success', 'Kategori dan Produk berhasil disimpan!');
    }
}
