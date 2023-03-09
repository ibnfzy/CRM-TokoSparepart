<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangBeliModel extends Model
{
    protected $table            = 'keranjang_beli';
    protected $primaryKey       = 'id_keranjang_beli';
    protected $allowedFields    = [
        'id_user',
        'rowid',
        'total_barang',
        'potongan',
        'total_bayar',
        'bukti_bayar',
        'status_bayar',
        'tgl_checkout',
    ];
}
