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

        return view('page/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('page/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Unipdu Press',
            'addres' =>
            [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'sambong',
                    'kota' => 'Jombang',
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'DPRD',
                    'kota' => 'Jombang',
                ]
            ]
        ];
        return view('page/contact', $data);
    }
}