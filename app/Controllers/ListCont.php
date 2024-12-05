<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ListCont extends Controller
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
        $data['produkList'] = $this->produkModel->getAllProduk();
        return view('C_List', $data); // Ganti dengan nama view Anda
    }

    public function exportToExcel()
{
    $produkList = $this->produkModel->getAllProduk();

    // Membuat Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    
    // Set header
    $sheet->setCellValue('A1', 'No');
    $sheet->setCellValue('B1', 'Nama Produk');
    $sheet->setCellValue('C1', 'QR Code');
    $sheet->setCellValue('D1', 'Serial');

    // Menambahkan data produk ke spreadsheet
    $row = 2;
    $domain = 'https://webuji.my.id'; // Ganti dengan domain Anda
    foreach ($produkList as $index => $produk) {
        $sheet->setCellValue('A' . $row, $index + 1);
        $sheet->setCellValue('B' . $row, $produk['nama_produk']);
        $sheet->setCellValue('C' . $row, $domain . '/' . $produk['qr_code']); // Menambahkan domain ke QR Code
        $sheet->setCellValue('D' . $row, $produk['serial']);
        $row++;
    }

    // Menyimpan ke file Excel
    $writer = new Xlsx($spreadsheet);
    $fileName = 'produk_' . date('YmdHis') . '.xlsx';
    $filePath = WRITEPATH . 'uploads/' . $fileName; // Menggunakan writable path
    $writer->save($filePath);

    // Mengunduh file Excel
    return $this->response->download($filePath, null)->setFileName($fileName);
}

}
