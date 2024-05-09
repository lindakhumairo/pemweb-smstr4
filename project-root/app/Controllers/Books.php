<?php

namespace App\Controllers;

use App\Models\BooksModel;

class Books extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        $this->bukuModel = new BooksModel();
    }
    public function index()
    {
        //$buku = $this->bukuModel->findAll();
        $data = [
            'title' => 'Daftar Buku',
            'buku'  => $this->bukuModel->getBuku()
        ];

        return view('books/index', $data);
    }

    public function detail($slug)
    {
        //$buku = $this->bukuModel->where(['slug' => $slug])->first();


        $data = [
            'title' => 'Detail Buku',
            'buku'  => $this->bukuModel->getBuku($slug)
        ];
        //jika buku tidak ada
        if (empty($data['buku'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Buku' . $slug . 'tidak ditemukan');
        }



        return view('books/detail', $data);
    }

    public function create()
    {

        $data = [
            'title' => 'Detail Buku'
        ];

        return view('books/create', $data);
    }
    public function save()
    {
        //$this->request->getVar('judul');

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');

        return redirect()->to('/books');
    }
}
