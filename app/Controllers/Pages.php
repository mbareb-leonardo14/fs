<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('pages/home');
    }

    public function blog() {
        $data = [
            'title' => 'Blog'
        ];
        return view ('pages/blog', $data);
    }

    public function contact() {
        $data = [
            'title' => 'Contact Us',
            'contact' => [
                [
                    'tipe' => 'email',
                    'email' => 'futuristicstore@gmail.com',
                    'facebook' => 'futuristicstore'
                ]
            ]
        ];
        return view ('pages/contact', $data);
    }
}