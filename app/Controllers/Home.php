<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Home extends BaseController
{
    protected $db;
    protected $barangModel;
    protected $cart;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->barangModel = new BarangModel();
        $this->cart = \Config\Services::cart();
    }

    public function index()
    {
        return view('home/index');
    }

    public function katalog()
    {
        return view('home/katalog', [
            'data' => $this->barangModel->orderBy('id_barang', 'DESC')->paginate(9, 'barang'),
            'pager' => $this->barangModel->pager
        ]);
    }

    public function kategori($kategori)
    {
        return view('home/kategori', [
            'data' => $this->barangModel->where('kategori_barang', str_replace('_', ' ', $kategori))->orderBy('id_barang', 'DESC')->paginate(9, 'barang'),
            'pager' => $this->barangModel->pager
        ]);
    }

    public function detail_barang($id)
    {
        return view('home/detail', [
            'data' => $this->barangModel->find($id)
        ]);
    }

    public function keranjang()
    {
        return view('home/cart');
    }

    public function add_item()
    {
        $get = $this->barangModel->find($this->request->getPost('id'));

        $this->cart->insert([
            'id' => $get['id_barang'],
            'qty' => 1,
            'price' => $get['harga_barang'],
            'name' => $get['nama_barang'],
            'gambar' => $get['gambar_barang'],
            'stok' => $get['stok_barang']
        ]);

        return $this->response->setJSON(['msg' => 'Produk berhasil masuk ke keranjang']);
    }

    public function remove_item($rowId)
    {
        $this->cart->remove($rowId);

        return redirect()->to(base_url('Keranjang'));
    }

    public function clear_cart()
    {
        $destroy = new \CodeIgniterCart\Config\Services;

        $destroy->cart()->destroy();
        $_SESSION['diskon'] = 0;
        $_SESSION['id_diskon'] = null;

        return redirect()->to(base_url('Keranjang'));
    }

    public function update_cart()
    {
        $rowid = $this->request->getPost('rowid');
        $qty = $this->request->getPost('qtybutton');
        $stok = $this->request->getPost('stok');
        $status = true;

        for ($i = 1; $i <= count($this->cart->contents()); $i++) {
            if ($qty[$i] > $stok[$i]) {
                $status = false;
                break;
            }

            $this->cart->update([
                'rowid' => $rowid[$i],
                'qty' => $qty[$i]
            ]);
        }

        if ($status == false) {
            return redirect()->to(base_url('Keranjang'))->with('type-status', 'error')
                ->with('message', 'Kuantitas produk melebihi stok');
        }

        return redirect()->to(base_url('Keranjang'))->with('type-status', 'success')
            ->with('message', 'Berhasil diperbaruhi');
    }
}