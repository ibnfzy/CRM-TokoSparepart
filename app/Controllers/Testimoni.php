<?php

namespace App\Controllers;

use App\Models\TestimoniModel;
use CodeIgniter\RESTful\ResourceController;

class Testimoni extends ResourceController
{
  protected $db;
  protected $testimoniModel;

  public function __construct()
  {
    helper('form');
    $this->db = \Config\Database::connect();
    $this->testimoniModel = new TestimoniModel();
  }

  /**
   * Return an array of resource objects, themselves in array format
   *
   * @return mixed
   */
  public function index()
  {
    return view('user/testimoni', [
      'title' => 'List Testimoni',
      'parentdir' => 'testimoni',
      'data' => $this->db->table('testimoni')
        ->where('id_user', $_SESSION['id_user'])
        ->get()->getResultArray()
    ]);
  }

  /**
   * Return a new resource object, with default properties
   *
   * @return mixed
   */
  public function new()
  {
    $get = $this->db->table('keranjang')
      ->select([
        'keranjang.rowid',
        'transaksi.id_barang',
        'transaksi.nama_produk'
      ])->join('transaksi', 'keranjang.rowid = transaksi.rowid', 'inner')
      ->where('keranjang.status_bayar', 'Selesai')
      ->where('keranjang.id_user', $_SESSION['id_user'])
      ->get()->getResultArray();

    $option = [];
    foreach ($get as $data) {
      $option[$data['id_barang']] = $data['nama_produk'];
    }

    return view('user/testimoni_add', [
      'title' => 'Tambah Testimoni',
      'parentdir' => 'testimoni',
      'data' => $option
    ]);
  }

  /**
   * Create a new resource object, from "posted" parameters
   *
   * @return mixed
   */
  public function create()
  {
    $rules = [
      'id_barang' => 'required',
      'nilai' => 'required|less_than_equal_to[8]',
      'isi' => 'required',
    ];

    if (!$this->validate($rules)) {
      return redirect()->to(base_url('CustPanel/Testimoni/new'))->with('type-status', 'error')
        ->with('dataMessage', $this->validator->getErrors());
    }

    $data = [
      'id_barang' => $this->request->getPost('id_barang'),
      'id_user' => $_SESSION['id_user'],
      'isi_testimoni' => $this->request->getPost('isi'),
      'bintang' => $this->request->getPost('nilai'),
      'insert_datetime' => date('D, d M Y H:i:s'),
    ];

    $this->testimoniModel->save($data);

    return redirect()->to(base_url('CustPanel/Testimoni'))->with('type-status', 'info')
      ->with('message', 'Testimoni berhasil');
  }

  /**
   * Return the editable properties of a resource object
   *
   * @return mixed
   */
  public function edit($id = null)
  {
    $get = $this->db->table('keranjang')
      ->select([
        'keranjang.rowid',
        'transaksi.id_barang',
        'transaksi.nama_produk'
      ])->join('transaksi', 'keranjang.rowid = transaksi.rowid', 'inner')
      ->where('keranjang.status_bayar', 'Selesai')
      ->where('keranjang.id_user', $_SESSION['id_user'])
      ->get()->getResultArray();

    $option = [];
    foreach ($get as $data) {
      $option[$data['id_barang']] = $data['nama_produk'];
    }

    return view('user/testimoni_edit', [
      'title' => 'Tambah Testimoni',
      'parentdir' => 'testimoni',
      'data' => $option,
      'item' => $this->testimoniModel->find($id)
    ]);
  }

  /**
   * Add or update a model resource, from "posted" properties
   *
   * @return mixed
   */
  public function update($id = null)
  {
    $rules = [
      'nilai' => 'required|less_than_equal_to[8]',
      'isi' => 'required',
    ];

    if (!$this->validate($rules)) {
      return redirect()->to(base_url('CustPanel/Testimoni/' . $id . '/edit'))->with('type-status', 'error')
        ->with('dataMessage', $this->validator->getErrors());
    }

    $data = [
      'id_user' => $_SESSION['id_user'],
      'isi_testimoni' => $this->request->getPost('isi'),
      'bintang' => $this->request->getPost('nilai'),
      'insert_datetime' => date('D, d M Y H:i:s'),
    ];

    $this->testimoniModel->update($id, $data);

    return redirect()->to(base_url('CustPanel/Testimoni'))->with('type-status', 'info')
      ->with('message', 'Testimoni berhasil');
  }

  /**
   * Delete the designated resource object from the model
   *
   * @return mixed
   */
  public function delete($id = null)
  {
    $this->testimoniModel->delete($id);

    return redirect()->to(base_url('CustPanel/Produk'))->with('type-status', 'info')
      ->with('message', 'Data berhasil terhapus');
  }
}