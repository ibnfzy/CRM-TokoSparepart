<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserLogin extends BaseController
{
    protected $db;
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        return view('login/user_login');
    }

    public function auth()
    {
        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = $this->UserModel->where('username', $username)->first();

        if ($data) {
            $password_data = $data['password'];
            $id = $data['id_user'];

            $verify = password_verify((isset($password)) ? $password : '', $password_data);

            if ($verify) {
                $sessionData = [
                    'id_user' => $data['id_user'],
                    'fullname' => $data['fullname'],
                    'username' => $data['username'],
                    'logged_in_pelanggan' => TRUE
                ];

                $session->set($sessionData);
                // $session->markAsTempdata('logged_in_admin', 1800); //timeout 30 menit

                $data = [
                    'last_login' => date('Y-m-d')
                ];

                $this->UserModel->update($id, $data);

                return redirect()->to(base_url('CustPanel'))->with('type-status', 'info')
                    ->with('message', 'Selamat Datang Kembali ' . $sessionData['fullname']);
            } else {
                return redirect()->to(base_url('Auth/User'))->with('type-status', 'error')
                    ->with('message', 'Password tidak benar');
            }
        } else {
            return redirect()->to(base_url('Auth/User'))->with('type-status', 'error')
                ->with('message', 'Username tidak benar');
        }
    }

    public function logout()
    {
        $session = session();

        $session->destroy();

        return redirect()->to(base_url('Auth/User'));
        // return view('login/user_login');
    }

    public function registration()
    {
        return redirect()->to(base_url('Auth/User#signup'));
    }

    public function signup()
    {
        $rules = [
            'fullname' => 'required|min_length[5]|max_length[30]',
            'username' => 'required|min_length[5]|max_length[16]|is_unique[user.username]',
            'password' => 'required|min_length[5]|max_length[16]',
            'confirmPassword' => 'required|matches[password]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('Auth/User#signup'))->with('type-status', 'error')
                ->with('dataMessage', $this->validator->getErrors());
        }

        $pwd = $this->request->getPost('password') ?? '';

        $data = [
            'username' => $this->request->getPost('username'),
            'fullname' => $this->request->getPost('fullname'),
            'password' => password_hash($pwd, PASSWORD_DEFAULT),
            'last_login' => date('Y-m-d H:i:s')
        ];

        $this->UserModel->save($data);

        $getUser = $this->UserModel->where('username', $this->request->getPost('username'))->first();

        $dataInfo = [
            'id_user' => $getUser['id_user']
        ];

        $this->db->table('user_informasi')->insert($dataInfo);

        return redirect()->to(base_url('Auth/User'))->with('type-status', 'success')
            ->with('message', 'Registrasi berhasil, silahkan login untuk memulai session');
    }
}