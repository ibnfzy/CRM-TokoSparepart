<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    protected $pelangganModel;

    public function __construct()
    {
        $this->pelangganModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Table Pelanggan',
            'parentdir' => 'Pelanggan',
            'pelanggan' => $this->pelangganModel->findAll()
        ];

        return view('admin/pelanggan', $data);
    }
}