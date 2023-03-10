<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table            = 'barang';
    protected $primaryKey       = 'id_barang';
    protected $allowedFields    = [
        'nama_barang',
        'gambar_barang',
        'desc_barang',
        'harga_barang',
        'kategori_barang',
        'stok_barang',
        'jam_tgl_upload',
    ];
}
