<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimoniModel extends Model
{
    protected $table            = 'testimoni';
    protected $primaryKey       = 'id_testimoni';
    protected $allowedFields    = [
        'id_barang',
        'id_user',
        'isi_testimoni',
        'bintang',
        'insert_datetime',
    ];
}
