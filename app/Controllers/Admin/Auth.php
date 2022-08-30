<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Auth extends BaseController
{

    public function index()
    {
         $data = [
            'title' => 'Login'
        ];
        return view ('auth/login', $data);
    }

    public function register() {
        $data = [
            'title' => 'Register'
        ];
        return view ('auth/register', $data);
    }
}