<?php

namespace App\Models;

use CodeIgniter\Model;

class UserInformasiModel extends Model
{
    protected $table            = 'user_informasi';
    protected $primaryKey       = 'id_user_detail';
    protected $allowedFields    = [
        'id_user',
        'alamat',
        'nomor_hp',
    ];
}
