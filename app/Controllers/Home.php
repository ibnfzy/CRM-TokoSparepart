<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home/index');
    }

    public function katalog()
    {
        return view('home/katalog');
    }

    public function kategori($id)
    {
        return view('home/kategori');
    }

    public function detail_barang($id)
    {
        return view('home/detail');
    }

    public function keranjang()
    {
        return view('home/cart');
    }
}