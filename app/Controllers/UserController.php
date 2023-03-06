<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'parentdir' => 'home'
        ];

        return view('user/dashboard', $data);
    }
}