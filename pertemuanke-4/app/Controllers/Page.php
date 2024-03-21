<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        echo view('layout/header', $data);
        echo view('page/home', $data);
        echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        echo view('layout/header', $data);
        echo view('page/about');
        echo view('layout/footer');
    }
}
