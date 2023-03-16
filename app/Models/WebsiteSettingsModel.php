<?php

namespace App\Models;

use CodeIgniter\Model;

class WebsiteSettingsModel extends Model
{
    protected $table            = 'website_settings';
    protected $primaryKey       = 'id_website_settings';
    protected $allowedFields    = [
        'alamat_toko',
        'kontak_toko',
        'biaya_ongkir',
    ];
}
