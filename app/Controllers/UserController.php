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
                'total_barang' => $this->cart->totalItems(),
                'potongan' => $diskon,
                'total_bayar' => $subtotal,
                'status_bayar' => ($metodePembayaran == 1) ? 'Menunggu Bukti Bayar' : 'Belum Lunas',
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
                    'total_harga' => 0,
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

    public function upload($id)
    {
        helper('form');
        $rules = [
            'gambar' => 'is_image[gambar]|max_size[gambar,2048]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('CustPanel/transaksi'))->with('type-status', 'error')
                ->with('dataMessage', $this->validator->getErrors());
        }

        $data = [
            'bukti_bayar' => $this->request->getFile('gambar')->getName(),
            'status_bayar' => 'Menunggu Validasi Bukti Bayar',
        ];

        if (!$this->request->getFile('gambar')->hasMoved()) {
            $this->request->getFile('gambar')->move('uploads');
        }

        $this->keranjang->update($id, $data);

        return redirect()->to(base_url('CustPanel/transaksi'))->with('type-status', 'info')
            ->with('message', 'Bukti Bayar berhasil diupload');
    }

    public function informasi()
    {
        helper('form');
        return view('user/informasi', [
            'title' => 'Informasi Pelanggan',
            'parentdir' => 'setting',
            'data' => $this->userInformasi->where('id_user', $_SESSION['id_user'])->first()
        ]);
    }

    public function update_informasi($id)
    {
        helper('form');
        $rules = [
            'alamat' => 'required|min_length[5]|max_length[254]',
            'nomor' => 'required|min_length[10]|max_length[13]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('CustPanel/informasi'))->with('type-status', 'error')
                ->with('dataMessage', $this->validator->getErrors());
        }

        $data = [
            'alamat' => $this->request->getPost('alamat'),
            'nomor_hp' => $this->request->getPost('nomor'),
        ];

        $this->userInformasi->update($id, $data);

        return redirect()->to(base_url('CustPanel/informasi'))->with('type-status', 'info')
            ->with('message', 'Data berhasil diperbarui');
    }

    public function updateStatusSelesai()
    {
        $data = [
            'status_bayar' => $this->request->getPost('status_bayar')
        ];

        $this->keranjang->update($this->request->getPost('id_keranjang'), $data);

        return $this->response->setJSON(['msg' => 'Berhasil merubah status bayar']);
    }

    public function testimoni()
    {
        return view('user/testimoni', [
            'title' => 'Testimoni'
        ]);
    }

    public function testimoni_add($id)
    {
        // 
    }

    public function testimoni_save()
    {
        # code...
    }

    public function testimoni_edit($id)
    {
        // 
    }

    public function testimoni_update($id)
    {
        # code...
    }
}
