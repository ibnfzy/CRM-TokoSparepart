<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriBarangModel;
use CodeIgniter\RESTful\ResourceController;

class Barang extends ResourceController
{
    protected $BarangModel;
    protected $kategoriModel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
        $this->kategoriModel = new KategoriBarangModel();
    }

    /**
     * Returns a string representation of the object.
     *
     * @see http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function index()
    {
        $data = [
            'title' => 'Table Barang',
            'parentdir' => 'Barang',
            'barang' => $this->BarangModel->findAll()
        ];

        return view('admin/barang', $data);
    }

    /**
     * Create a new instance of the given value.
     *
     * @param  mixed  $value
     * @return static
     */
    public function new()
    {
        helper('form');

        $option = [];

        foreach ($this->kategoriModel->findAll() as $item) {
            $option[$item['nama_kategori']] = $item['id_kategori'] . '. ' . $item['nama_kategori'];
        }

        $data = [
            'title' => 'Tambah Barang',
            'parentdir' => 'Barang',
            'option' => $option
        ];

        return view('admin/barang_add', $data);
    }

    /**
     * Create a new record in the database.
     *
     * @return bool
     */
    public function create()
    {
        helper('form');
        $rules = [
            'nama' => 'required|min_length[5]|max_length[50]',
            'harga' => 'required|min_length[1]|max_length[7]',
            'stok_barang' => 'required|min_length[1]|max_length[2]',
            'kategori' => 'required',
            'gambar' => 'is_image[gambar]|max_size[gambar,2048]',
            'desc' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('U/Barang/new'))->with('type-status', 'error')
                ->with('dataMessage', $this->validator->getErrors());
        }

        $data = [
            'nama_barang' => $this->request->getPost('nama'),
            'gambar_barang' => $this->request->getFile('gambar')->getName(),
            'desc_barang' => $this->request->getPost('desc'),
            'harga_barang' => $this->request->getPost('harga'),
            'stok_barang' => $this->request->getPost('stok_barang'),
            'kategori_barang' => $this->request->getPost('kategori'),
            'jam_tgl_upload' => date('D, d M Y H:i:s')
        ];

        if (!$this->request->getFile('gambar')->hasMoved()) {
            $this->request->getFile('gambar')->move('uploads');
        }

        $this->BarangModel->save($data);

        return redirect()->to(base_url('U/Barang'))->with('type-status', 'info')
            ->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Edit Barang
     * @param int $id
     * @return void
     */
    public function edit($id = null)
    {
        helper('form');
        $option = [];

        foreach ($this->kategoriModel->findAll() as $item) {
            $option[$item['nama_kategori']] = $item['id_kategori'] . '. ' . $item['nama_kategori'];
        }
        $data = [
            'title' => 'Edit Barang',
            'parentdir' => 'Barang',
            'barang' => $this->BarangModel->find($id),
            'option' => $option
        ];

        return view('admin/barang_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function update($id = null)
    {
        helper('form');
        if ($this->request->getFile('gambar')->isValid()) {
            $rules = [
                'nama' => 'required|min_length[5]|max_length[50]',
                'harga' => 'required|min_length[1]|max_length[7]',
                'stok_barang' => 'required|min_length[1]|max_length[2]',
                'kategori' => 'required',
                'gambar' => 'is_image[gambar]|max_size[gambar,2048]',
                'desc' => 'required',
            ];

            $data = [
                'nama_barang' => $this->request->getPost('nama'),
                'gambar_barang' => $this->request->getFile('gambar')->getName(),
                'desc_barang' => $this->request->getPost('desc'),
                'harga_barang' => $this->request->getPost('harga'),
                'stok_barang' => $this->request->getPost('stok_barang'),
                'kategori_barang' => $this->request->getPost('kategori'),
                'jam_tgl_upload' => date('D, d M Y H:i:s')
            ];
        } else {
            $rules = [
                'nama' => 'required|min_length[5]|max_length[50]',
                'harga' => 'required|min_length[1]|max_length[7]',
                'stok_barang' => 'required|min_length[1]|max_length[2]',
                'kategori' => 'required',
                'desc' => 'required',
            ];

            $data = [
                'nama_barang' => $this->request->getPost('nama'),
                'desc_barang' => $this->request->getPost('desc'),
                'harga_barang' => $this->request->getPost('harga'),
                'stok_barang' => $this->request->getPost('stok_barang'),
                'kategori_barang' => $this->request->getPost('kategori'),
                'jam_tgl_upload' => date('D, d M Y H:i:s')
            ];
        }

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('U/Barang/' . $id . '/edit'))->with('type-status', 'error')
                ->with('dataMessage', $this->validator->getErrors());
        }

        if ($this->request->getFile('gambar')->isValid() && !$this->request->getFile('gambar')->hasMoved()) {
            $this->request->getFile('gambar')->move('uploads');
        }

        $this->BarangModel->update($id, $data);

        return redirect()->to(base_url('U/Barang'))->with('type-status', 'info')
            ->with('message', 'Data berhasil diubah');
    }

    /**
     * Delete the given model from the database.
     *
     * @param  int  $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->BarangModel->delete($id);

        return redirect()->to(base_url('U/Barang'))->with('type-status', 'info')
            ->with('message', 'Data berhasil terhapus');
    }
}