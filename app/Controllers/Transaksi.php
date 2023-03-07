<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KeranjangBeliModel;
use App\Models\TransaksiModel;

class Transaksi extends BaseController
{
    protected $transaksiModel;
    protected $keranjangModel;
    protected $db;

    public function __construct()
    {
        helper('form');
        $this->db = \Config\Database::connect();
        $this->transaksiModel = new TransaksiModel();
        $this->keranjangModel = new KeranjangBeliModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return view('admin/order', [
            'title' => 'Table Order',
            'parentdir' => 'order',
            'order' => $this->transaksiModel->findAll(),
            'keranjang' => $this->keranjangModel->findAll()
        ]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $get = $this->keranjangModel->find($id);
        // dd($get);
        return view('admin/order_show', [
            'title' => 'Bukti Bayar',
            'parentdir' => 'order',
            'data' => $get
        ]);
    }
}