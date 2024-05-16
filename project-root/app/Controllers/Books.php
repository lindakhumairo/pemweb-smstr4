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
            'buku' => $this->bukuModel->getBuku()
        ];

        return view('books/index', $data);
    }

    public function detail($slug)
    {
        //$buku = $this->bukuModel->where(['slug' => $slug])->first();


        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->bukuModel->getBuku($slug)
        ];

        if (empty($data['buku'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Buku' . $slug . 'Tidak ditemukan');
        }

        return view('books/detail', $data);
    }

    public function create()
    {

        $data = [
            'title' => 'Form Tambah Buku',
            'validation' => session()->getFlashdata('validation') ?? \Config\Services::validation(),
        ];

        return view('books/create', $data);
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/books');
    }

    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[books.judul]',
                'errors' => [
                    'required' => '{field} buku harus di isi',
                    'is_unique' => '{field} buku sudah terdaftar'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} buku harus di isi'
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} buku harus di isi'
                ]
            ],
            'sampul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} buku harus di isi'
                ]
            ]
        ])) {
            session()->setFlashdata('validation', \Config\Services::validation());
            return redirect()->to('/books/create')->withInput();
        }
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
