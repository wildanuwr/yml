<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk'; // Nama tabel di database
    protected $primaryKey = 'id'; // Pastikan ini sesuai dengan primary key di database
    protected $allowedFields = ['nama_produk', 'nama_kategori', 'serial', 'qr_code','total_scan', 'foto']; // Kolom yang boleh diisi

     // Method untuk mengambil semua data produk
     public function getAllProduk()
     {
         return $this->findAll();
     }
}

