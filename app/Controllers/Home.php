<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\WebsiteSettingsModel;
use CodeIgniter\Database\RawSql;

class Home extends BaseController
{
    protected $db;
    protected $barangModel;
    protected $cart;
    protected $websiteSetting;

    public function __construct()
    {
        $this->websiteSetting = new WebsiteSettingsModel();
        $this->db = \Config\Database::connect();
        $this->barangModel = new BarangModel();
        $this->cart = \Config\Services::cart();
    }

    public function index()
    {
        $data = [];
        $getCorouselTopSell = $this->db->table('transaksi')->select(new RawSql('DISTINCT id_barang, COUNT(id_barang) >= 2'))->get(4)->getResultArray();
        $getCorouselRecomendation = $this->db->table('barang')->orderBy('rand()')->limit(4)->get()->getResultArray();
        $q = $this->websiteSetting->find('01');
        $getRecomendation = $this->db->table('barang')->orderBy('rand()')->limit(6)->get()->getResultArray();

        if ($q['corousel_type'] == 1 && $getCorouselTopSell >= 3) {
            foreach ($getCorouselTopSell as $item) {
                $getBarang = $this->barangModel->find($item['id_barang']);
                $data[] = [
                    'id_barang' => $getBarang['id_barang'],
                    'gambar' => $getBarang['gambar_barang']
                ];
            }
        } else {
            foreach ($getCorouselRecomendation as $item) {
                $data[] = [
                    'id_barang' => $item['id_barang'],
                    'gambar' => $item['gambar_barang']
                ];
            }
        }

        return view('home/index', [
            'corousel' => $data,
            'corousel_type' => ($q['corousel_type'] == 0) ? 'Rekomendasi' : 'Top Selling',
            'rekom' => $getRecomendation
        ]);
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

        $_SESSION['kategori'] = $get['kategori_barang'];

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