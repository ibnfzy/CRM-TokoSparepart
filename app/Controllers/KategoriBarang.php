<?php

namespace App\Controllers;

use App\Models\KategoriBarangModel;
use CodeIgniter\RESTful\ResourceController;

class KategoriBarang extends ResourceController
{
    protected $kategoriModel;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->kategoriModel = new KategoriBarangModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'title' => 'Table Kategori Produk',
            'parentdir' => 'Produk',
            'kategori' => $this->kategoriModel->findAll()
        ];

        return view('admin/kategori', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        helper('form');
        $data = [
            'title' => 'Tambah Kategori',
            'parentdir' => 'Produk',
        ];

        return view('admin/kategori_add', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        helper('form');
        $rules = [
            'kategori' => 'required|min_length[5]|max_length[25]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('U/Kategori/new'))->with('type-status', 'error')
                ->with('dataMessage', $this->validator->getErrors());
        }

        $data = [
            'nama_kategori' => $this->request->getPost('kategori'),
        ];

        $this->kategoriModel->save($data);

        return redirect()->to(base_url('U/Kategori'))->with('type-status', 'info')
            ->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        helper('form');
        $data = [
            'title' => 'Edit Kategori Produk',
            'parentdir' => 'Produk',
            'data' => $this->kategoriModel->find($id)
        ];

        return view('admin/kategori_edit', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        helper('form');
        $rules = [
            'kategori' => 'required|min_length[5]|max_length[25]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('U/Kategori/new'))->with('type-status', 'error')
                ->with('dataMessage', $this->validator->getErrors());
        }

        $data = [
            'nama_kategori' => $this->request->getPost('kategori'),
        ];

        $this->kategoriModel->save($data);

        return redirect()->to(base_url('U/Kategori'))->with('type-status', 'info')
            ->with('message', 'Data berhasil diperbarui');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->kategoriModel->delete($id);

        return redirect()->to(base_url('U/Kategori'))->with('type-status', 'info')
            ->with('message', 'Data berhasil terhapus');
    }
}