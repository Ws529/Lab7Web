<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class Artikel extends BaseController
{
    // Fungsi bantuan untuk menambahkan URL gambar yang benar
    private function addUrlGambar($artikelData)
    {
        if (empty($artikelData)) {
            return [];
        }

        // Memastikan input adalah array dari array
        $isSingle = !is_array(reset($artikelData)) || !array_key_exists('gambar', reset($artikelData));
        if ($isSingle) {
            $artikelData['url_gambar'] = base_url('assets/' . $artikelData['gambar']);
            return $artikelData;
        }

        return array_map(function($item) {
            $item['url_gambar'] = base_url('assets/' . ($item['gambar'] ?? 'placeholder.jpg'));
            return $item;
        }, $artikelData);
    }

    public function index()
    {
        
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikelData = $model->select('artikel.*, kategori.nama_kategori')
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left')
            ->where('artikel.status', 1)->orderBy('artikel.id', 'DESC')->findAll();

        $artikel = $this->addUrlGambar($artikelData);
        return view('artikel/index', compact('artikel', 'title'));
    }

    public function admin_index()
    {
        set_time_limit(120);
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $kategoriModel = new KategoriModel();
        $q = $this->request->getGet('q') ?? '';
        $kategori_id = $this->request->getGet('kategori_id') ?? '';

        $builder = $model->select('artikel.*, kategori.nama_kategori')
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left')
            ->orderBy('artikel.id', 'DESC');

        if (!empty($q)) {
            $builder->like('artikel.judul', $q);
        }
        if (!empty($kategori_id) && is_numeric($kategori_id)) {
            $builder->where('artikel.id_kategori', (int)$kategori_id);
        }

        $artikelData = $builder->paginate(10);
        $pager = $model->pager;

        $artikel = $this->addUrlGambar($artikelData);
        
        $data = [
            'title' => $title, 'artikel' => $artikel, 'pager' => $pager,
            'q' => $q, 'kategori_id' => $kategori_id, 'kategori' => $kategoriModel->findAll(),
        ];
        return view('artikel/admin_index', $data);
    }

    public function add()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required', 'isi' => 'required', 'id_kategori' => 'required|integer',
            'gambar' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,2048]',
        ]);

        if ($validation->withRequest($this->request)->run()) {
            $file = $this->request->getFile('gambar');
            $fileName = $file->getRandomName();
            $file->move(FCPATH . 'assets', $fileName);

            $model = new ArtikelModel();
            $model->insert([
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'slug' => url_title($this->request->getPost('judul'), '-', true),
                'gambar' => $fileName,
                'status' => 1,
                'id_kategori' => $this->request->getPost('id_kategori'),
            ]);
            return redirect()->to(base_url('admin/artikel'));
        }

        $kategoriModel = new KategoriModel();
        return view('artikel/form_add', [
            'title' => 'Tambah Artikel', 'validation' => $validation,
            'kategori' => $kategoriModel->findAll()
        ]);
    }

    public function edit($id)
    {
        $model = new ArtikelModel();
        $artikel = $model->find($id);
        if (!$artikel) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Artikel dengan ID $id tidak ditemukan.");
        }
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required', 'isi' => 'required', 'id_kategori' => 'required|integer',
            'gambar' => 'if_exist|is_image[gambar]|max_size[gambar,2048]',
        ]);

        if ($this->request->getMethod() === 'post' && $validation->withRequest($this->request)->run()) {
            $data = [
                'judul' => $this->request->getPost('judul'), 'isi' => $this->request->getPost('isi'),
                'slug' => url_title($this->request->getPost('judul'), '-', true),
                'id_kategori' => $this->request->getPost('id_kategori'),
            ];

            $file = $this->request->getFile('gambar');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                if ($artikel['gambar'] && file_exists(FCPATH . 'assets/' . $artikel['gambar'])) {
                    unlink(FCPATH . 'assets/' . $artikel['gambar']);
                }
                $newName = $file->getRandomName();
                $file->move(FCPATH . 'assets', $newName);
                $data['gambar'] = $newName;
            }
            $model->update($id, $data);
            return redirect()->to('admin/artikel');
        }

        $kategoriModel = new KategoriModel();
        return view('artikel/form_edit', [
            'title' => 'Edit Artikel', 'data' => $artikel,
            'kategori' => $kategoriModel->findAll(), 'validation' => $validation
        ]);
    }

    public function delete($id)
    {
        $model = new ArtikelModel();
        $artikel = $model->find($id);
        if ($artikel && !empty($artikel['gambar']) && file_exists(FCPATH . 'assets/' . $artikel['gambar'])) {
            unlink(FCPATH . 'assets/' . $artikel['gambar']);
        }
        $model->delete($id);
        return redirect()->to('admin/artikel');
    }

    public function view($slug)
    {
        $model = new ArtikelModel();
        $artikelData = $model->select('artikel.*, kategori.nama_kategori')
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left')
            ->where('slug', $slug)->where('artikel.status', 1)->first();

        if (!$artikelData) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Artikel dengan slug '$slug' tidak ditemukan.");
        }
        
        $artikel = $this->addUrlGambar($artikelData);

        return view('artikel/view', [
            'title' => $artikel['judul'], 'artikel' => $artikel
        ]);
    }
}