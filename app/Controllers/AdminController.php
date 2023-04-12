<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KeranjangBeliModel;
use App\Models\TransaksiModel;
use App\Models\UserInformasiModel;
use App\Models\UserModel;
use App\Models\WebsiteSettingsModel;

class AdminController extends BaseController
{
    protected $transakiModel;
    protected $keranjangModel;
    protected $db;
    protected $userInformation;
    protected $settingsModel;
    protected $user;

    public function __construct()
    {
        $this->transakiModel = new TransaksiModel();
        $this->keranjangModel = new KeranjangBeliModel();
        $this->userInformation = new UserInformasiModel();
        $this->settingsModel = new WebsiteSettingsModel();
        $this->user = new UserModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'parentdir' => 'home'
        ];

        return view('admin/dashboard', $data);
    }

    public function transaksi()
    {
        return view('admin/transaksi', [
            'title' => 'Transaksi',
            'transaksi' => $this->transakiModel->findAll(),
            'keranjang' => $this->keranjangModel->findAll()
        ]);
    }

    public function piutang()
    {
        return view('admin/piutang', [
            'title' => 'Piutang',
            'data' => $this->db->table('keranjang_beli')
                ->where('status_bayar', 'Menunggu Bukti Bayar')
                ->where('status_bayar', 'Belum Lunas')
                ->get()->getResultArray()
        ]);
    }

    public function validasi_pembayaran($id)
    {
        $data = [
            'status_bayar' => 'Diproses'
        ];

        $this->keranjangModel->update($id, $data);

        return redirect()->to(previous_url())->with('type-status', 'success')
            ->with('message', 'Data berhasil diubah');
    }

    public function invoice($userid = '', $rowid)
    {
        helper('form');
        $get = $this->userInformation->where('id_user', $userid)->first();
        $getTransaksi = $this->transakiModel->where('rowid', $rowid)->first();
        $getKeranjang = $this->keranjangModel->where('rowid', $rowid)->first();
        $getuser = $this->db->table('user')->where('id_user', $userid)->get()->getRowArray();

        $getTransaksiData = $this->db->table('transaksi')
            ->where('rowid', $rowid)
            ->get()
            ->getResultArray();

        $tgl_batas = date('Y-m-d', strtotime('+2 days', strtotime($getKeranjang['tgl_checkout'])));

        return view('admin/invoice', [
            'title' => 'Invoice',
            'parentdir' => 'transaksi',
            'rowid' => $rowid,
            'dataToko' => $this->settingsModel->find(01),
            'dataUser' => $get,
            'transaksi' => $getTransaksi,
            'keranjang' => $getKeranjang,
            'batas' => $tgl_batas,
            'data' => $getTransaksiData,
            'user' => $getuser
        ]);
    }

    public function settings()
    {
        return view('admin/setting', [
            'data' => $this->settingsModel->find(01)
        ]);
    }

    public function save_settings()
    {
        helper('form');
        $rules = [
            'alamat_toko' => 'required',
            'kontak_toko' => 'required|min_length[10]|max_length[13]',
            'biaya_ongkir' => 'required|max_length[7]',
            'corousel_type' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('U/Settings'))->with('type-status', 'error')
                ->with('dataMessage', $this->validator->getErrors());
        }

        $data = [
            'alamat_toko' => $this->request->getPost('alamat_toko'),
            'kontak_toko'  => $this->request->getPost('kontak_toko'),
            'biaya_ongkir'  => $this->request->getPost('biaya_ongkir'),
            'corousel_type' => $this->request->getPost('corousel_type')
        ];

        $this->settingsModel->update('01', $data);

        return redirect()->to(previous_url())->with('type-status', 'success')
            ->with('message', 'Data berhasil diubah');
    }

    public function user()
    {
        return view('admmin/user', [
            'title' => 'User',
            'data' => $this->user->findAll()
        ]);
    }
}
