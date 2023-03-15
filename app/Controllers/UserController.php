<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use App\Models\KeranjangBeliModel;
use App\Models\TransaksiModel;
use App\Models\UserInformasiModel;
use App\Models\WebsiteSettingsModel;

class UserController extends BaseController
{
    protected $db;
    protected $barangModel;
    protected $cart;
    protected $userInformasi;
    protected $transaksi;
    protected $keranjang;
    protected $settingsModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->barangModel = new BarangModel();
        $this->cart = \Config\Services::cart();
        $this->userInformasi = new UserInformasiModel();
        $this->transaksi = new TransaksiModel();
        $this->keranjang = new KeranjangBeliModel();
        $this->settingsModel = new WebsiteSettingsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'parentdir' => 'home'
        ];

        return view('user/dashboard', $data);
    }

    public function checkout()
    {
        helper('text');
        $diskon = 0;
        $metodePembayaran = $this->request->getPost('metode');

        switch ($metodePembayaran) {
            case '1':
                $text = 'Transfer';
                break;

            case '2':
                $text = 'Cash';
                break;

            default:
                $text = 'Transfer';
                break;
        }

        $subtotal = $_SESSION['subtotal'];
        $getPelanggan = $this->db->table('keranjang_beli')->where('id_user', $_SESSION['id_user'])->get()->getResultArray();
        $getItem = $this->db->table('barang')->orderBy('rand()')->where('kategori_barang', $_SESSION['kategori'])->limit(1)->get()->getRowArray();

        if (count($getPelanggan) > 3) {
            $diskon = 10;
        }

        if (isset($_SESSION['logged_in_pelanggan']) and $_SESSION['logged_in_pelanggan'] == TRUE) {
            $q = 0;
            $get = [];
            $data = [];
            $rowid = random_string('alnum', 15);
            foreach ($this->cart->contents() as $item) {
                $barang = $this->barangModel->find($item['id']);
                $get[] = $barang;
                $get[$q]['qty'] = $item['qty'];
                $get[$q]['total_harga'] = $item['qty'] * $item['price'];
                $stok = $barang['stok_barang'] - $item['qty'];
                $this->barangModel->update($item['id'], [
                    'stok_barang' => $stok
                ]);
                $q++;
            }

            foreach ($get as $item) {
                $data[] = [
                    'id_barang' => $item['id_barang'],
                    'id_user' => $_SESSION['id_user'],
                    'rowid' => $rowid,
                    'fullname' => $_SESSION['fullname'],
                    'nama_barang' => $item['nama_barang'],
                    'total_harga' => $item['total_harga'],
                    'transaksi_datetime' => date('D, d M Y H:i:s'),
                    'qty_transaksi' => $item['qty'],
                ];
            }

            $dataKeranjang = [
                'id_user' => session()->get('id_user'),
                'rowid' => $rowid,
                'total_items' => $this->cart->totalItems(),
                'potongan' => $diskon,
                'total_bayar' => $subtotal,
                'status_bayar' => 'Menunggu Bukti Bayar',
                'tgl_checkout' => date('Y-m-d'),
                'metode_pembayaran' => $text
            ];

            if (count($getPelanggan) == 1 or count($getPelanggan) >= 5) {
                $data[] = [
                    'id_barang' => $getItem['id_barang'],
                    'id_user' => $_SESSION['id_user'],
                    'rowid' => $rowid,
                    'fullname' => $_SESSION['fullname'],
                    'nama_barang' => $getItem['nama_barang'],
                    'total_harga' => $getItem['harga_barang'],
                    'transaksi_datetime' => date('D, d M Y H:i:s'),
                    'qty_transaksi' => 1,
                ];
            }

            $this->db->table('transaksi')->insertBatch($data);
            $this->db->table('keranjang_beli')->insert($dataKeranjang);

            $home = new Home;
            $home->clear_cart();

            return redirect()->to(base_url('CustPanel/invoice/' . $rowid));
        } else {
            return redirect()->to(base_url('Keranjang'))->with('type-status', 'error')
                ->with('message', 'Gagal melakukan checkout, sesi login tidak ditemukan');
        }
    }

    public function invoice($rowid)
    {
        helper('form');
        $get = $this->userInformasi->where('id_user', $_SESSION['id_user'])->first();
        $getTransaksi = $this->transaksi->where('rowid', $rowid)->first();
        $getKeranjang = $this->keranjang->where('rowid', $rowid)->first();

        $getTransaksiData = $this->db->table('transaksi')
            ->where('rowid', $rowid)
            ->get()
            ->getResultArray();

        $tgl_batas = date('Y-m-d', strtotime('+2 days', strtotime($getKeranjang['tgl_checkout'])));

        return view('user/invoice', [
            'title' => 'Invoice',
            'parentdir' => 'transaksi',
            'rowid' => $rowid,
            'dataToko' => $this->settingsModel->find(01),
            'dataUser' => $get,
            'transaksi' => $getTransaksi,
            'keranjang' => $getKeranjang,
            'batas' => $tgl_batas,
            'data' => $getTransaksiData
        ]);
    }

    public function transaksi()
    {
        $getKeranjang = $this->db->table('keranjang_beli')
            ->where('id_user', $_SESSION['id_user'])
            ->get()
            ->getResultArray();

        $getTransaksi = $this->db->table('transaksi')
            ->where('id_user', $_SESSION['id_user'])
            ->get()
            ->getResultArray();

        return view('user/transaksi', [
            'title' => 'Table Transaksi',
            'parentdir' => 'transaksi',
            'transaksi' => $getTransaksi,
            'keranjang' => $getKeranjang
        ]);
    }
}
