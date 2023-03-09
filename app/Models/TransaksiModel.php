<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id_transaksi';
    protected $allowedFields    = [
        'id_barang',
        'id_user',
        'rowid',
        'fullname',
        'nama_barang',
        'total_harga',
        'transaksi_datetime',
        'qty_transaksi',
    ];
}
