<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\ProdukModel;

class ProdukCont extends BaseController
{
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->findAll();
        return view('C_Produk', $data);
    }

    public function getProdukByKategori()
    {
        $kategori_id = $this->request->getPost('kategori_id');
        $kategoriModel = new KategoriModel();
        $produkData = $kategoriModel->where('nama_kategori', $kategori_id)->first();

        if ($produkData) {
            $produkList = explode(',', $produkData['nama_produk']);
        } else {
            $produkList = [];
        }

        return $this->response->setJSON($produkList);
    }

    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel(); // Inisialisasi model
    }

    public function generate()
{
    if ($this->request->getMethod() === 'POST') {
        $nama_produk = $this->request->getPost('nama_produk');
        $kategori_id = $this->request->getPost('kategori_id');
        $jumlah = $this->request->getPost('jumlah');
        $file = $this->request->getFile('foto');

        // Validasi sederhana
        if (empty($nama_produk) || empty($kategori_id) || empty($jumlah) || !$file->isValid()) {
            session()->setFlashdata('error', 'Semua kolom wajib diisi dan foto harus di-upload.');
            return redirect()->back()->withInput();
        }

        // Validasi jumlah
        if (!is_numeric($jumlah) || $jumlah < 1) {
            session()->setFlashdata('error', 'Jumlah produk harus berupa angka dan minimal 1.');
            return redirect()->back()->withInput();
        }

        // Validasi foto
        if (!$file->isValid()) {
            session()->setFlashdata('error', 'Foto produk tidak valid.');
            return redirect()->back()->withInput();
        }

        // Pindahkan file foto
        $newFileName = $file->getRandomName(); 
        $file->move(ROOTPATH . '../public_html/uploads', $newFileName);

        // Logika generate Serial Number dan QR Code
        $produkData = [];
        for ($i = 0; $i < $jumlah; $i++) {
            // Logika untuk membuat serial number berdasarkan nama produk
            $serial_prefix = ''; // Prefix berdasarkan nama produk

            if (strpos($nama_produk, 'MPX 2 800') !== false) {
                $serial_prefix = '261'; // Prefix untuk produk MPX 2 800
            } elseif (strpos($nama_produk, 'MPX 1 1L') !== false) {
                $serial_prefix = '903'; // Prefix untuk produk MPX 1 1L
            } elseif (strpos($nama_produk, 'MPX 1 800') !== false) {
                $serial_prefix = '402'; // Prefix untuk produk MPX 1 800
            } else {
                $serial_prefix = '000'; // Default prefix jika produk tidak sesuai dengan pola yang dikenal
            }

            // Generate 4 digit tambahan secara acak (hanya angka)
            $serial_suffix = substr(str_shuffle('0123456789'), 0, 6);
            $serial = $serial_prefix . $serial_suffix; // Menggabungkan prefix dan suffix menjadi serial number

            // Generate 8 karakter QR Code (huruf dan angka)
            $qrCode = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);

            // Simpan data ke dalam array
            $produkData[] = [
                'nama_produk' => $nama_produk,
                'nama_kategori' => $kategori_id,
                'serial' => $serial,
                'qr_code' => $qrCode,
                'foto' => $newFileName, 
                'created_at' => date('Y-m-d H:i:s') 
            ];
        }

        // Simpan ke database menggunakan model
        $this->produkModel->insertBatch($produkData);

        // Redirect dengan pesan sukses
        return redirect()->to('/produk')->with('success', 'Produk berhasil disimpan!');
    }

    return redirect()->back()->with('error', 'Metode tidak valid.');
}
}
