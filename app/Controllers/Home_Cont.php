<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Home_Cont extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index($code)
    {
        // Ambil data produk berdasarkan QR Code atau Serial Number
        $productData = $this->produkModel->where('qr_code', $code)
            ->orWhere('serial', $code)
            ->first();

        // Cek jika data ditemukan
        if (!$productData) {
            return view('notfound');
        }

        // Cek jika jumlah scan sudah mencapai batas maksimum (5 kali)
        if ($productData['total_scan'] >= 5) {
            // Menampilkan tampilan bahwa QR Code sudah discan 5 kali
            return view('C_ScanLimitReached', ['product' => $productData]);
        }

        // Jika belum mencapai batas, tambahkan jumlah scan
        $newTotalScan = $productData['total_scan'] + 1;
        $this->produkModel->update($productData['id'], ['total_scan' => $newTotalScan]);

        // Kirim data ke view
        $data['product'] = $productData;
        $data['product']['total_scan'] = $newTotalScan;

        return view('C_Home', $data);
    }

    public function detail($id)
    {
        // Dapatkan data produk berdasarkan ID
        $product = $this->produkModel->find($id);

        // Jika produk ditemukan
        if ($product) {
            // Cek jika jumlah scan sudah mencapai batas maksimum (5 kali)
            if ($product['total_scan'] >= 5) {
                // Menampilkan tampilan bahwa QR Code sudah discan 5 kali
                return view('C_ScanLimitReached', ['product' => $product]);
            }

            // Tambahkan jumlah scan
            $newTotalScan = $product['total_scan'] + 1;
            $this->produkModel->update($id, ['total_scan' => $newTotalScan]);

            // Kirim data produk ke view
            $data['product'] = $product;
            $data['product']['total_scan'] = $newTotalScan;

            return view('C_Home', $data);
        } else {
            // Produk tidak ditemukan
            return redirect()->to('/');
        }
    }
    public function home()
    {
        return view('C_Home');
    }
}
