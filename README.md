## Pertemuan ke 2 
# Profil
|  |  |
| -------- | --- |
| **Nama** | Wawan Suwandi |
| **Kelas** | TI.23.A.5 |
| **Mata Kuliah** | Pemrograman Web 2 |

LAB11WEB_VueJs

## Praktikum 1: PHP Framework (Codeigniter)

## Langkah-langkah Praktikum
## Persiapan
 kalian bisa mencari ekstensi yang kalian butuhkan, jika ada yang belum diaktivasi kalian dapat mengaktifkan ekstensi tersebut, melalu XAMPP Control Panel, pada bagian Apache
klik Config -> PHP.ini :

![1](https://github.com/user-attachments/assets/00d5d921-fa8a-4a36-851f-39f1e70253c6)


![2 2](https://github.com/user-attachments/assets/1c3e4e00-4842-410c-85ee-14e15e3997f2)

* Contohnya disini extension=intl belum aktif, maka cara mengaktivasinya adalah dengan menghilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

## Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual
dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual.
* Unduh Codeigniter dari website https://codeigniter.com/download
* Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
* Ubah nama direktory codeigniter4-framework-v4.x.xx menjadi ci4.
* Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/

![2](https://github.com/user-attachments/assets/2284d686-ec63-4430-bcb8-cc4d8d812f09)


## Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka Shell pada XAMPP.

![3](https://github.com/user-attachments/assets/3927b1e3-3e50-49d6-a672-9bdd013c5dce)


Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (Contoh : cd htdocs/lab11_ci/ci4)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah:

### php spark
![4](https://github.com/user-attachments/assets/50e42925-ea28-4228-ac01-b8cd108ec069)


## Mengaktifkan Mode Debugging
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.

Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.

![Cuplikan layar 2025-03-06 110140](https://github.com/user-attachments/assets/6313445d-6340-4695-9e85-de4ca49ec90c)


Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya,
maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment
variable CI_ENVIRONMENT menjadi development.
![Cuplikan layar 2025-03-19 224208](https://github.com/user-attachments/assets/39bbd60c-e5d0-45c5-af5f-dd997b36b197)


Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable
CI_ENVIRONMENT menjadi development.
#### Catatan : Kadang, CodeIgniter tidak membaca file .env karena masih dikomentari, pastikan tidak ada tanda # di depan CI_ENVIRONMENT.
![error](https://github.com/user-attachments/assets/dd371312-6a2b-4237-aa16-7af8d555a2fa)



Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file
app/Controller/Home.php hilangkan titik koma pada akhir kode return view('welcome_message').
![welcome_message](https://github.com/user-attachments/assets/550cb8e7-5999-423a-a23f-24a8d797147c)


## Memahami konsep MVC
Codeigniter menggunakan konsep MVC. MVC meripakan singkatan dari Model-View-
Controller. MVC merupakan konsep arsitektur yang umum digunakan dalam pengembangan aplikasi. Konsep MVC adalah memisahkan kode program berdasarkan logic proses, data, dan
tampilan. Untuk logic proses diletakkan pada direktori Contoller, Objek data diletakkan pada direktori Model, dan desain tampilan diletakkan pada direktori View.

Codeigniter menggunakan konsep pemrograman berorientasi objek dalam mengimplementasikan konsep MVC.

Model merupakan kode program yang berisi pemodelan data. Data dapat berupa database ataupun sumber lainnya.

View merupakan kode program yang berisi bagian yang menangani terkait tampilan user interface sebuah aplikasi. didalam aplikasi web biasanya pasti akan berhubungan dengan html dan css.

Controller merupakaan kode program yang berkaitan dengan logic proses yang menghubungkan antara view dan model. Controller berfungsi untuk menerima request dan data dari user kemudian diproses dengan menghubungkan bagian model dan view.

## Routing dan Controller
Routing merupakan proses yang mengatur arah atau rute dari request untuk menentukan fungsi/bagian mana yang akan memproses request tersebut. Pada framework CI4, routing bertujuan untuk menentukan Controller mana yang harus merespon sebuah request. Controller
adalah class atau script yang bertanggung jawab merespon sebuah request.

Pada Codeigniter, request yang diterima oleh file index.php akan diarahkan ke Router untuk
meudian oleh router tesebut diarahkan ke Controller.

Router terletak pada file app/config/Routes.php
![Cuplikan layar 2025-03-17 134543](https://github.com/user-attachments/assets/16ae4739-8006-4b1f-b699-735555201783)


Pada file tersebut kita dapat mendefinisikan route untuk aplikasi yang kita buat.
Contoh:
```` python
$routes->get('/', 'Home::index');
````
Kode tersebut akan mengarahkan rute untuk halaman home.

#### Membuat Route Baru.
Tambahkan kode berikut di dalam Routes.php
```` python
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
````
Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut.

php spark routes
![Cuplikan layar 2025-03-06 112546](https://github.com/user-attachments/assets/f4aa1d4d-4fdd-421d-8dbd-62f518c25464)


Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about
![Cuplikan layar 2025-03-06 110046](https://github.com/user-attachments/assets/9bc03383-4bbe-4f4a-913f-0c8fd7dfb01d)


Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

#### Membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.

```` python
<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "Ini halaman About";
    }
    public function contact()
    {
        echo "Ini halaman Contact";
    }
    public function faqs()
    {
        echo "Ini halaman FAQ";
    }
}
````

![Cuplikan layar 2025-03-13 103720](https://github.com/user-attachments/assets/2e239d0b-c8ee-4412-ba77-c0a29aa8d4f0)


#### Auto Routing
Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false.

```` python
$routes->get('page/tos', 'Page::tos');
$routes->setAutoRoute(true);
````

Tambahkan method baru pada Controller Page seperti berikut.
```` python
public function tos()
{
    echo "ini halaman Term of Services";
}
````

Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos
![Cuplikan layar 2025-03-17 165351](https://github.com/user-attachments/assets/54994b17-f7e1-46d0-afda-401b180e6653)


### Membuat View
Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori Views (app/Views/about.php) kemudian isi kodenya seperti berikut.
```` python
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>

<body>
    <h1><?= $title; ?></h1>
    <hr>
    <p><?= $content; ?></p>
</body>

</html>
````

Ubah method about pada class Controller Page menjadi seperti berikut:
``` python
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }
```

Kemudian lakukan refresh pada halaman tersebut.



### Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.

Buat file css pada direktori public dengan nama style.css

![Cuplikan layar 2025-03-17 165959](https://github.com/user-attachments/assets/e86d06f2-9c6f-4577-bcc4-6fd1ad9bc565)


Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php

File app/Views/template/header.php
```python
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
    <div id="container">
        <header>
            <h1>Layout Sederhana</h1>
        </header>
        <nav>
            <a href="<?= base_url('/'); ?>" class="active">Home</a>
            <a href="<?= base_url('/artikel'); ?>">Artikel</a>
            <a href="<?= base_url('/about'); ?>">About</a>
            <a href="<?= base_url('/contact'); ?>">Kontak</a>
        </nav>
        <section id="wrapper">
            <section id="main"></section>
```

File app/Views/template/footer.php
```python
</section>
<aside id="sidebar">
    <div class="widget-box">
        <h3 class="title">Widget Header</h3>
        <ul>
            <li><a href="#">Widget Link</a></li>
            <li><a href="#">Widget Link</a></li>
        </ul>
    </div>
    <div class="widget-box">
        <h3 class="title">Widget Text</h3>
        <p>Vestibulum lorem elit, iaculis in nisl volutpat,
            malesuada tincidunt arcu. Proin in leo fringilla, vestibulum mi porta,
            faucibus felis. Integer pharetra est nunc, nec pretium nunc pretium ac.</p>
    </div>
</aside>
</section>
<footer>
    <p>&copy; 2021 - Universitas Pelita Bangsa</p>
</footer>
</div>
</body>

</html>
```

Kemudian ubah file app/Views/about.php seperti berikut.
```python
<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>
```

Selanjutnya refresh tampilan pada alamat http://localhost:8080/about
![Cuplikan layar 2025-03-19 225329](https://github.com/user-attachments/assets/0d892742-c644-4d27-bd9f-dc3e90436bc2)


# Praktikum 2: Framework Lanjutan (CRUD)

---

# Tujuan Praktikum
1. Memahami konsep dasar **Model** pada CodeIgniter 4.
2. Memahami konsep dasar **CRUD (Create, Read, Update, Delete)**.
3. Mampu membuat **aplikasi sederhana** menggunakan CRUD di **CodeIgniter 4**.
4. Menghubungkan aplikasi dengan **database MySQL**.
5. Menerapkan **best practice coding** untuk CRUD.

---

# Persiapan
- Gunakan text editor seperti VSCode.
- Buka folder lab11_ci pada docroot webserver (htdocs).
- Jalankan XAMPP dan pastikan MySQL Server aktif.

- Buat database baru dengan nama `lab_ci4`:
  ```sql
  CREATE DATABASE lab_ci4;
  ```
- Buat tabel artikel dengan struktur berikut:
  ```sql
  CREATE TABLE artikel (
      id INT(11) AUTO_INCREMENT,
      judul VARCHAR(200) NOT NULL,
      isi TEXT NULL,
      gambar VARCHAR(200) NULL,
      status TINYINT(1) NOT NULL DEFAULT 0,
      slug VARCHAR(200) NULL,
      PRIMARY KEY(id)
      created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
      updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  );
  ```
- Cek database di phpMyAdmin.
  ![image](https://github.com/user-attachments/assets/d344a41f-73db-48c1-8ba3-e6c0bea6d353)

- Konfigurasi Koneksi Database
  Gunakan file .env dan atur parameter koneksi database sesuai kebutuhan.
  ![image](https://github.com/user-attachments/assets/bb8ba0d7-7e93-4925-9c0d-f9c750d902a6)

- Membuat Model
  Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php
  <?php
namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar'];
}

- Membuat Controller
  Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.
  
<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/index', compact('artikel', 'title'));
    }
}

- Membuat View
  Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php.
  
<?= $this->include('template/header'); ?>

<?php if($artikel): foreach($artikel as $row): ?>
<article class="entry">
    <h2<a href="<?= base_url('/artikel/' . $row['slug']);?>"><?= $row['judul']; ?></a>
</h2>
    <img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?= $row['judul']; ?>">
    <p><?= substr($row['isi'], 0, 200); ?></p>
</article>
<hr class="divider" />
<?php endforeach; else: ?>
<article class="entry">
    <h2>Belum ada data.</h2>
</article>
<?php endif; ?>

<?= $this->include('template/footer'); ?>

Lalu buka browser kembali, dengan mengakses url http://localhost:8080/artikel

![view1](https://github.com/user-attachments/assets/cdb42a9a-5c27-4715-ad85-ab68bf72c014)

Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.

INSERT INTO artikel (judul, isi, slug) VALUE
('Artikel pertama', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.','artikel-pertama'),
('Artikel kedua', 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun.', 'artikel-kedua');

Refresh kembali browser untuk melihat hasilnya.

![view2](https://github.com/user-attachments/assets/3b28bb0e-0b91-426b-9614-a4a64c8731e3)

- Membuat Tampilan Detail Artikel
  Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().

public function view($slug)
{
    $model = new ArtikelModel();
    $artikel = $model->where([
        'slug' => $slug
    ])->first();

    // Menampilkan error apabila data tidak ada.
    if (!$artikel)
    {
        throw PageNotFoundException::forPageNotFound();
    }

    $title = $artikel['judul'];
    return view('artikel/detail', compact('artikel', 'title'));
}

- Membuat View Detail
  Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.
  
<?= $this->include('template/header'); ?>

<article class="entry">
    <h2><?= $artikel['judul']; ?></h2>
    <img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?=
$artikel['judul']; ?>">
    <p><?= $row['isi']; ?></p>
</article>

<?= $this->include('template/footer'); ?>

- Membuat Routing untuk artikel detail
  Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.
  
$routes->get('/artikel/(:any)', 'Artikel::view/$1');

![Artikel2](https://github.com/user-attachments/assets/4432e348-e87b-4b78-95e0-b630f41b1c1b)

- Membuat Menu Admin
  Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index().

public function admin_index()
{
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $artikel = $model->findAll();
    return view('artikel/admin_index', compact('artikel', 'title'));
}

- Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php

<?= $this->include('template/admin_header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
        </tr>
    </thead>
    <tbody>
    <?php if($artikel): foreach($artikel as $row): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td>
            <b><?= $row['judul']; ?></b>
            <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
        </td>
        <td><?= $row['status']; ?></td>
        <td>
            <a class="btn" href="<?= base_url('/admin/artikel/edit/' . $row['id']);?>">Ubah</a>
            <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' . $row['id']);?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
        <td colspan="4">Belum ada data.</td>
    </tr>
    <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
        </tr>
    </tfoot>
</table>

<?= $this->include('template/admin_footer'); ?>

- Tambahkan routing untuk menu admin:

$routes->group('admin', function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->add('artikel/add', 'Artikel::add');
    $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
});

- Akses menu admin  http://localhost:8080/admin/artikel
  
  ![Admin](https://github.com/user-attachments/assets/97355c10-3a9a-4f10-8f32-0fd900d94029)

- Menambah Data Artikel
  Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().

public function add()
{
    // validasi data.
    $validation = \Config\Services::validation();
    $validation->setRules(['judul' => 'required']);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid)
    {
        $artikel = new ArtikelModel();
        $artikel->insert([
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'slug' => url_title($this->request->getPost('judul')),
        ]);
        return redirect('admin/artikel');
    }
    $title = "Tambah Artikel";
    return view('artikel/form_add', compact('title'));
}

- Kemudian buat view untuk form tambah dengan nama form_add.php

<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p>
        <input type="text" name="judul">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"></textarea>
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/admin_footer'); ?>

- Mengubah Data
  Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

public function edit($id)
{
    $artikel = new ArtikelModel();

    // validasi data.
    $validation = \Config\Services::validation();
    $validation->setRules(['judul' => 'required']);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid)
    {
        $artikel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
        ]);
        return redirect('admin/artikel');
    }

    // ambil data lama
    $data = $artikel->where('id', $id)->first();
    $title = "Edit Artikel";
    return view('artikel/form_edit', compact('title', 'data'));
}

- Kemudian buat view untuk form tambah dengan nama form_edit.php

<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p>
        <input type="text" name="judul" value="<?= $data['judul'];?>" >
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"><?=$data['isi'];?></textarea>
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/admin_footer'); ?>

![form_edit](https://github.com/user-attachments/assets/a8352f8e-5238-4348-b01b-d1fca75e0594)

- Menghapus Data
  Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().

public function delete($id)
{
    $artikel = new ArtikelModel();
    $artikel->delete($id);
    return redirect('admin/artikel');
}

##  Praktikum 3: View Layout dan View Cell

- Membuat Layout Utama 

Buat folder **layout** di dalam `app/Views/`, lalu buat file `main.php` dengan kode berikut:

```php
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?? 'My Website' ?></title>
        <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Layout Sederhana</h1>
            </header>
            <nav>
                <a href="<?= base_url('/'); ?>" class="active">Home</a>
                <a href="<?= base_url('/artikel'); ?>">Artikel</a>
                <a href="<?= base_url('/about'); ?>">About</a>
                <a href="<?= base_url('/contact'); ?>">Kontak</a>
            </nav>
            <section id="wrapper">
                <section id="main">
                    <?= $this->renderSection('content') ?>
                </section>
                <aside id="sidebar">
                    <?= view_cell('App\\Cells\\ArtikelTerkini::render') ?>
                </aside>
            </section>
            <footer>
                <p>&copy; 2021 - Universitas Pelita Bangsa</p>
            </footer>
        </div>
    </body>
    </html>
```

---

- Modifikasi File View
- 
Ubah file `app/Views/home.php` agar sesuai dengan layout baru:
  
![home-index](https://github.com/user-attachments/assets/f3b8aece-c2a3-43d4-89d0-941f7ba2e8e7)

Sesuaikan juga halaman lain agar menggunakan layout yang baru.  

---

- Menampilkan Data Dinamis dengan View Cell 

View Cell digunakan untuk menampilkan komponen UI yang bisa digunakan ulang. Contoh yang sering digunakan adalah sidebar, widget, atau menu navigasi.

- Membuat Class View Cell
- 
1. Buat folder Cells di dalam `app/`.
2. Buat file `ArtikelTerkini.php` di dalam `app/Cells/` dengan kode berikut:

![cells-artikelterkini](https://github.com/user-attachments/assets/c2669abf-0a9d-4560-b79d-8a7dda212830)


- Membuat View untuk View Cell
1. Buat folder components di dalam `app/Views/`.
2. Buat file `artikel_terkini.php` di dalam `app/Views/components/` dengan kode berikut:
3. panggil di dalam layout/main.php

Source code `app/Views/components/`
![cells-views](https://github.com/user-attachments/assets/c95b8cd0-7956-4fec-9b9b-5c6a55e3e777)


Panggil view cell ke dalam `layout/main.php`
![view_cell](https://github.com/user-attachments/assets/34767428-4e0a-4d87-a0f1-60af72d16f06)

- Pertanyaan dan Tugas
1. Sesuaikan data dengan praktikum sebelumnya, perlu melakukan perubahan field pada database dengan menambahkan tanggal agar dapat mengambil data artikel terbaru.
   ALTER TABLE artikel ADD COLUMN created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
   ![1](https://github.com/user-attachments/assets/dbb5e2d5-d27b-42f2-a1d7-f3d538660fa2)
2. Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.
3. Apa manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi?
View Layout memberikan cara untuk membuat struktur tampilan yang konsisten di seluruh halaman aplikasi. Dengan layout, kita hanya membuat satu file kerangka HTML (seperti header, sidebar, footer), dan konten halaman tinggal di-inject ke dalamnya. Ini:

Menghemat waktu
Memudahkan pemeliharaan tampilan
Menghindari duplikasi kode
4. Jelaskan perbedaan antara View Cell dan View biasa.
Fitur	View Layout	View Cell
Fungsi	Template utama yang mengatur struktur tampilan	Komponen modular yang bisa dipanggil dalam tampilan
Fleksibilitas	Digunakan untuk halaman penuh	Bisa digunakan dalam bagian kecil seperti sidebar atau widget
Pemakaian	extend() dan renderSection()	view_cell()
Contoh Penggunaan	Layout utama website dengan header, footer, dan sidebar	Daftar artikel terbaru, widget pencarian, dll
5. Ubah View Cell agar hanya menampilkan post dengan kategori tertentu.
Langkah:
Tambahkan field kategori di tabel artikel
ALTER TABLE artikel ADD kategori VARCHAR(50);
![2](https://github.com/user-attachments/assets/3b68fa41-6adb-4cc7-b1fe-db9086be0ea8)
Tambahkan parameter kategori di method render:

public function render($kategori = null)
{
    $model = new ArtikelModel();
    $query = $model->orderBy('created_at', 'DESC');

    if ($kategori) {
        $query->where('kategori', $kategori);
    }

    $artikel = $query->limit(5)->findAll();

    return view('components/artikel_terkini', ['artikel' => $artikel]);
}

Isi setiap kolom pada tabel, bisa manual atau lewat fitur tambah artikel
Modifikasi View Cell agar filter berdasarkan kategori Buka app/Cells/ArtikelTerkini.php, ubah fungsi render() jadi seperti ini:
<?php

namespace App\Cells;

use App\Models\ArtikelModel;

class ArtikelTerkini
{
    public function render($kategori = null)
    {
        $model = new ArtikelModel();

        $query = $model->orderBy('created_at', 'DESC')->limit(5);
        if ($kategori) {
            $query->where('kategori', $kategori);
        }

        $artikel = $query->findAll();

        return view('components/artikel_terkini', ['artikel' => $artikel]);
    }
}

Panggil View Cell dengan parameter kategori Pada app/Views/layout/main.php:
<?= view_cell('App\\Cells\\ArtikelTerkini::render', ['kategori' => 'Teknologi']) ?>
Tambahkan route agar URL seperti /kategori/teknologi bisa diakses:
$routes->get('/kategori/(:segment)', 'Artikel::kategori/$1');
Tambah View-nya (app/Views/artikel/kategori.php)

<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2><?= $title ?></h2>
<ul>
    <?php foreach ($artikel as $row): ?>
        <li>
            <a href="<?= base_url('/artikel/' . $row['slug']) ?>">
                <?= esc($row['judul']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?= $this->endSection() ?>

Screenshot :
![Olahraga](https://github.com/user-attachments/assets/ceb4ee55-9ea1-4f35-b6f4-a84d6bb62916)

![Teknologi](https://github.com/user-attachments/assets/453aed34-5068-4c97-b54b-443526b4198e)

## Praktikum ke 4 - 6

Langkah-langkah Praktikum
Praktikum 4: Membuat Sistem Login

1. Persiapkan Database
Buat tabel user pada database dengan SQL berikut:

CREATE TABLE user (
  id INT(11) auto_increment,
  username VARCHAR(200) NOT NULL,
  useremail VARCHAR(200),
  userpassword VARCHAR(200),
  PRIMARY KEY(id)
);
![Database](https://github.com/user-attachments/assets/fecddce1-e795-4566-ba6b-cb79112366c1)

2. Membuat Model User
Buat model UserModel.php pada direktori app/Models:

<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['username', 'useremail', 'userpassword'];
}

3. Membuat Controller User
Buat controller User.php dengan method index() dan login() untuk mengelola user dan login:

<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $title = 'Daftar User';
        $model = new UserModel();
        $users = $model->findAll();
        return view('user/index', compact('users', 'title'));
    }
    public function login()
    {
        helper(['form']);
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        if (!$email)
        {
        return view('user/login');
        }

        $session = session();
        $model = new UserModel();
        $login = $model->where('useremail', $email)->first();
        if ($login)
        {
            $pass = $login['userpassword'];
            if (password_verify($password, $pass))
            {
                $login_data = [
                'user_id' => $login['id'],
                'user_name' => $login['username'],
                'user_email' => $login['useremail'],
                'logged_in' => TRUE,
                ];

                $session->set($login_data);
                return redirect('admin/artikel');
            }
            else
            {
                $session->setFlashdata("flash_msg", "Password salah.");
                return redirect()->to('/user/login');
            }
        }
        else
        {
            $session->setFlashdata("flash_msg", "email tidak terdaftar.");
            return redirect()->to('/user/login');
        }
    }
}

4. Membuat View Login
Buat view login.php untuk form login:

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Login</title>
		<link rel="stylesheet" href="<?= base_url('/style.css'); ?>" />
	</head>

	<body>
		<div id="login-wrapper">
			<h1>Sign In</h1>
			<?php if (session()->getFlashdata('flash_msg')): ?>
			<div class="alert alert-danger">
				<?= session()->getFlashdata('flash_msg') ?>
			</div>
			<?php endif; ?>
			<form action="" method="post">
				<div class="mb-3">
					<label for="InputForEmail" class="form-label">Email address</label>
					<input
						type="email"
						name="email"
						class="form-control"
						id="InputForEmail"
						value="<?= set_value('email') ?>"
					/>
				</div>
				<div class="mb-3">
					<label for="InputForPassword" class="form-label">Password</label>

					<input
						type="password"
						name="password"
						class="form-control"
						id="InputForPassword"
					/>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</body>
</html>

5. Membuat Database Seeder
Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

php spark make:seeder UserSeeder
Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori/app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'admin',
            'useremail' => 'admin@email.com',
            'userpassword' => password_hash('admin123', PASSWORD_DEFAULT),
        ]);
    }
}

Selanjutnya buka kembali CLI dan ketik berikut:

php spark db:seed UserSeeder

6. Membuat Filter Auth
Buat filter Auth.php untuk membatasi akses ke halaman admin:

<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // jika user belum login
        if (! session()->get('logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('/user/login');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}

Selanjutnya buka file app/Config/Filters.php tambahkan kode:

'auth' => App\Filters\Auth::class

![Auth Filters](https://github.com/user-attachments/assets/0e4d9907-d6ae-4a18-91a3-6b71bcd1145d)
![Routes](https://github.com/user-attachments/assets/f437b94f-f10b-418d-a68e-2f348316341d)

7. Percobaan Akses Menu Admin
Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses maka, akan dimuculkan halaman login.

8. Fungsi Logout
Tambahkan method logout pada Controller User seperti berikut:

public function logout()
    {
        session()->destroy();
        return redirect()->to('/user/login');
    }
    
## Praktikum 5: Pagination dan Pencarian
1. Membuat Pagination
Modifikasi controller artikel untuk menambahkan pagination:

public function admin_index()
{
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $data = [
        'title' => $title,
        'artikel' => $model->paginate(10), #data dibatasi 10 record per halaman
        'pager' => $model->pager,
    ];
    return view('artikel/admin_index', $data);
}
Kemudian buka file views/artikel/admin_index.php dan tambahkan kode berikut dibawah deklarasi tabel data.

<?= $pager->links(); ?>
Selanjutnya buka kembali menu daftar artikel, tambahkan data lagi untuk melihat hasilnya.
![pagination](https://github.com/user-attachments/assets/b374fe9e-092f-46b6-b7ba-7a5a3f79f201)

2. Membuat Pencarian
Modifikasi controller untuk menambahkan pencarian data:

public function admin_index()
    {
        $title = 'Daftar Artikel';
        $q = $this->request->getVar('q') ?? '';
        $model = new ArtikelModel();
        $data = [
            'title' => $title,
            'q' => $q,
            'artikel' => $model->like('judul', $q)->paginate(10), # data dibatasi 10 record per halaman
            'pager' => $model->pager,
        ];
        return view('artikel/admin_index', $data);
    }
Kemudian buka kembali file views/artikel/admin_index.php dan tambahkan form pencarian sebelum deklarasi tabel seperti berikut:

<form method="get" class="form-search">
    <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari data">
    <input type="submit" value="Cari" class="btn btn-primary">
</form>
Dan pada link pager ubah seperti berikut.

<?= $pager->only(['q'])->links(); ?>

3. Uji Coba Pagination dan Pencarian
Selanjutnya ujicoba dengan membuka kembali halaman admin artikel, masukkan kata kunci tertentu pada form pencarian.

![search](https://github.com/user-attachments/assets/db3f9a93-1310-462a-b59c-f3933f1a848d)

## Praktikum 6: Upload File Gambar
1. Modifikasi Controller Artikel
Buka kembali Controller Artikel pada project sebelumnya, sesuaikan kode pada method add seperti berikut:

public function add()
    {
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        if ($isDataValid) {
            $file = $this->request->getFile('gambar');
            $file->move(ROOTPATH . 'public/gambar');
            $artikel = new ArtikelModel();
            $artikel->insert([
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'slug' => url_title($this->request->getPost('judul')),
                'gambar' => $file->getName(),
            ]);
            return redirect('admin/artikel');
        }
        $title = "Tambah Artikel";
        return view('artikel/form_add', compact('title'));
    }
2. Modifikasi View Artikel
Tambahkan field input file pada form artikel:

<p>
    <input type="file" name="gambar">
</p>
Dan sesuaikan tag form dengan menambahkan ecrypt type seperti berikut.

<form action="" method="post" enctype="multipart/form-data">
 
3. Uji Coba Upload Gambar
Akses menu tambah artikel dan uji coba upload gambar.
![add file](https://github.com/user-attachments/assets/e57447a5-c014-4066-bb81-3de359b25ec5)

---

## Praktikum 7 - 11: PHP Framework (CodeIgniter 4) & Vuejs
Dokumentasi ini berisi rangkuman materi dan latihan dalam Praktikum 7-11 dari mata kuliah Pemorograman Web 2.
Setiap praktikum membahas berbagai aspek penggunaan PHP Framework CodeIgniter 4, mulai dari dasar hingga konsep lanjutan seperti Relasi Tabel dan Query Builder, Ajax, dan Implementasi AJAX Pagination dan Search, REST API.

Praktikum ini bertujuan untuk memberikan pemahaman mendalam tentang pengembangan aplikasi web berbasis CodeIgniter 4, termasuk konfigurasi awal, struktur proyek, serta implementasi fitur-fitur esensial dalam sebuah aplikasi web.

| Variable           | Isi                         |
| ------------------ | --------------------------- |
| **Nama**           | Wawan Suwandi         |
| **NIM**            | 312310457                   |
| **Kelas**          | TI.23.A.5                   |
| **Mata Kuliah**    | Pemrograman Web 2           |
| **Dosen Pengampu** | Agung Nugroho S.kom., M.kom |

---

## Praktikum 7: Relasi Tabel dan Query Builder

 Tujuan Praktikum
Memahami konsep relasi antar tabel dalam database.
Mengimplementasikan relasi One-to-Many.
Melakukan query dengan join tabel menggunakan Query Builder.
Menampilkan data dari tabel yang berelasi.
⚙ Persiapan Awal
Pastikan MySQL Server aktif.
Buka kembali folder proyek lab11_ci di VSCode.
Jalankan database lab_ci4.

1. Membuat Tabel kategori
CREATE TABLE kategori (
    id_kategori INT(11) AUTO_INCREMENT,
    nama_kategori VARCHAR(100) NOT NULL,
    slug_kategori VARCHAR(100),
    PRIMARY KEY (id_kategori)
);

![tabel_kategori](https://github.com/user-attachments/assets/ee16accd-54f8-4f7e-b623-51ef6d19d2cd)

2. Mengubah Tabel artikel
ALTER TABLE artikel
ADD COLUMN id_kategori INT(11),
ADD CONSTRAINT fk_kategori_artikel
FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori); 

3. Membuat Model KategoriModel.php
Path: app/Models/KategoriModel.php

<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_kategori', 'slug_kategori'];
}

 4. Memodifikasi Model ArtikelModel.php
Tambahkan method untuk mengambil data artikel beserta nama kategori.

<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['nama_kategori'];

     public function getAllKategori()
    {
        return $this->findAll();
    }
}

 5. Memodifikasi Controller Artikel.php
Gunakan method getArtikelDenganKategori() pada method index dan admin_index. Tambahkan juga filter berdasarkan kategori_id.

Contoh pengambilan data artikel dengan join:

<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Artikel extends BaseController
{
    // Menampilkan daftar artikel
    public function index()
    {
        // Membuat objek model
        $artikelModel = new ArtikelModel();
        $kategoriModel = new KategoriModel();

        // Mengambil data artikel beserta kategori
        $artikel = $artikelModel->getArtikelDenganKategori();

        // Mengambil daftar kategori
        $kategori = $kategoriModel->getAllKategori();

        // Mengirimkan data ke view
        return view('artikel/index', [
            'artikel' => $artikel,
            'kategori' => $kategori
        ]);
    }

    // Menampilkan artikel berdasarkan slug
  public function view($slug)
{
    $model = new ArtikelModel();
    // Gabungkan artikel dengan kategori
    $artikel = $model->select('artikel.*, kategori.nama_kategori')
                     ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left')
                     ->where(['slug' => $slug])
                     ->first();

    if (!$artikel) {
        throw PageNotFoundException::forPageNotFound();
    }

    $title = $artikel['judul'];
    return view('artikel/detail', compact('artikel', 'title'));
}


    // Menampilkan artikel admin dan pencarian
  public function admin_index()
{
    $title = 'Daftar Artikel';
    $q = $this->request->getVar('q') ?? '';  // Ambil pencarian dari URL
    $kategoriId = $this->request->getVar('kategori'); // Ambil kategori dari URL

    // Model Artikel
    $model = new ArtikelModel();

    // Menggabungkan artikel dengan kategori
    $model->select('artikel.*, kategori.nama_kategori')
          ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left');

    // Filter berdasarkan pencarian jika ada
    if (!empty($q)) {
        $model->like('judul', $q)->orLike('isi', $q);
    }

    // Filter berdasarkan kategori jika ada
    if (!empty($kategoriId)) {
        $model->where('artikel.id_kategori', $kategoriId);
    }

    // Ambil artikel dan paginate
    $data = [
        'title'   => $title,
        'q'       => $q,
        'selectedKategori' => $kategoriId,
        'kategori' => (new KategoriModel())->findAll(), // Ambil kategori
        'artikel' => $model->paginate(5),  // Artikel per halaman
        'pager'   => $model->pager,  // Pagination
    ];

    return view('artikel/admin_index', $data);
}



   public function search()
{
    $q = $this->request->getGet('q');  // Ambil query pencarian dari URL
    $kategoriId = $this->request->getGet('kategori');  // Ambil kategori yang dipilih

    // Ambil model artikel
    $artikelModel = new \App\Models\ArtikelModel();
    $query = $artikelModel->where('1=1');  // Mulai query dengan kondisi true

    // Filter berdasarkan kata kunci jika ada
    if ($q) {
        $query = $query->like('judul', $q)->orLike('isi', $q);
    }

    // Filter berdasarkan kategori jika ada
    if ($kategoriId) {
        $query = $query->where('id_kategori', $kategoriId);
    }

    // Ambil artikel yang sesuai dengan filter
    $artikel = $query->findAll();

    // Ambil data kategori untuk dropdown
    $kategoriModel = new \App\Models\KategoriModel();
    $kategori = $kategoriModel->findAll();  // Pastikan kategori diambil dengan benar

    // Kirim data ke view
    return view('artikel/admin_index', [
        'q' => $q,
        'selectedKategori' => $kategoriId,
        'kategori' => $kategori,  // Kirimkan kategori ke view
        'artikel' => $artikel,  // Kirimkan artikel yang ditemukan
    ]);
}




    // Menambahkan artikel baru
    public function add()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'id_kategori' => 'required'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $file = $this->request->getFile('gambar');
            $namaGambar = '';

            if ($file && $file->isValid()) {
                // Pindahkan file gambar ke folder gambar
                $file->move(ROOTPATH . 'public/gambar');
                $namaGambar = $file->getName();
            }

            $artikel = new ArtikelModel();
            // Pastikan slug unik
            $slug = url_title($this->request->getPost('judul'), '-', true);

            // Insert data artikel
            $artikel->insert([
                'judul'       => $this->request->getPost('judul'),
                'isi'         => $this->request->getPost('isi'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'slug'        => $slug,
                'gambar'      => $namaGambar,
            ]);
            return redirect()->to('/admin/artikel');
        }

        $title = "Tambah Artikel";
        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->findAll();
        return view('artikel/form_add', compact('title', 'kategori'));
    }

    // Mengedit artikel
    public function edit($id)
    {
        $artikel = new ArtikelModel();
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'id_kategori' => 'required'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $dataUpdate = [
                'judul'       => $this->request->getPost('judul'),
                'isi'         => $this->request->getPost('isi'),
                'id_kategori' => $this->request->getPost('id_kategori'),
            ];

            $file = $this->request->getFile('gambar');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $file->move(ROOTPATH . 'public/gambar');
                $dataUpdate['gambar'] = $file->getName();
            }

            // Update artikel
            $artikel->update($id, $dataUpdate);
            return redirect()->to('/admin/artikel');
        }

        // Ambil data artikel untuk diedit
        $data = $artikel->where('id', $id)->first();
        $title = "Edit Artikel";
        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->findAll();

        return view('artikel/form_edit', compact('title', 'data', 'kategori'));
    }

    // Menghapus artikel
    public function delete($id)
    {
        $artikel = new ArtikelModel();
        $artikel->delete($id);
        return redirect()->to('/admin/artikel');
    }
}

 6. Memodifikasi View
 
a. View artikel/index.php
<?= $this->include('template/header'); ?>

<!-- Menampilkan Daftar Kategori -->
<div class="kategori-container">
  <h3>Kategori</h3>
  <ul>
    <?php if ($kategori): foreach ($kategori as $cat): ?>
    <li><a href="<?= base_url('/kategori/' . $cat['id_kategori']); ?>"><?= $cat['nama_kategori']; ?></a></li>
    <?php endforeach; else: ?>
    <li>No categories found</li>
    <?php endif; ?>
  </ul>
</div>

<!-- Artikel yang sudah ada -->
<div class="article-container">
  <?php if ($artikel): foreach ($artikel as $row): ?>
  <article class="entry">
    <div class="entry-meta">
      <span class="category"><?= $row['nama_kategori'] ?></span>
    </div>
    <h2 class="entry-title">
      <a href="<?= base_url('/artikel/' . $row['slug']); ?>"><?= $row['judul']; ?></a>
    </h2>
    <div class="entry-image">
      <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>">
    </div>
    <div class="entry-excerpt">
      <p><?= substr($row['isi'], 0, 200); ?>...</p>
      <a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="read-more">Read More</a>
    </div>
  </article>
  <?php endforeach; else: ?>
  <article class="entry">
    <h2 class="entry-title">No articles found.</h2>
  </article>
  <?php endif; ?>
</div>

<?= $this->include('template/footer'); ?>

b. View artikel/admin_index.php
Tambahkan dropdown filter kategori dan tampilkan kolom nama kategori.

<?= $this->include('template/admin_header'); ?>
<form method="get" class="form-search">
  <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari artikel...">

  <select name="kategori" id="kategori">
    <option value="">Semua Kategori</option>
    <?php if (isset($kategori) && !empty($kategori)): ?>
    <?php foreach ($kategori as $cat): ?>
    <option value="<?= $cat['id_kategori']; ?>" <?= ($selectedKategori == $cat['id_kategori']) ? 'selected' : ''; ?>>
      <?= $cat['nama_kategori']; ?>
    </option>
    <?php endforeach; ?>
    <?php else: ?>
    <option disabled>Tidak ada kategori</option>
    <?php endif; ?>
  </select>

  <input type="submit" value="Cari" class="btn">
</form>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Kategori</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php if($artikel): foreach($artikel as $row): ?>
    <tr>
      <td><?= $row['id']; ?></td>
      <td>
        <b><?= esc($row['judul']); ?></b>
        <p><small><?= esc(substr($row['isi'], 0, 50)); ?>...</small></p>
      </td>
      <td><?= esc($row['nama_kategori'] ?? 'Tidak ada'); ?></td>
      <td><?= esc($row['status']); ?></td>
      <td>
        <a class="btn btn-primary" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">Ubah</a>
        <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');"
          href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>">Hapus</a>
      </td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
      <td colspan="5">Belum ada data.</td>
    </tr>
    <?php endif; ?>
  </tbody>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Kategori</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </tfoot>
</table>

<!-- Pagination Section -->
<div class="pagination">
  <?= $pager->links() ?>
</div>

<?= $this->include('template/admin_footer'); ?>

c. View artikel/form_add.php dan form_edit.php
form _add.php

<div class="container">
  <div class="form-card">
    <div class="form-header">
      <h1 class="form-title"><?= $title ?></h1>
      <p class="form-subtitle">
        <?= isset($artikel['id']) ? 'Edit artikel yang sudah ada' : 'Buat artikel baru untuk dipublikasikan' ?></p>
    </div>

    <form action="" method="post" enctype="multipart/form-data" class="form-grid">
      <div class="form-group">
        <label for="judul" class="form-label">Judul Artikel <span>(wajib)</span></label>
        <input type="text" id="judul" name="judul" class="form-control"
          placeholder="Contoh: Cara Membuat Website Modern"
          value="<?= isset($artikel['judul']) ? esc($artikel['judul']) : '' ?>" required>
      </div>

      <div class="form-group">
        <label for="isi" class="form-label">Isi Artikel <span>(wajib)</span></label>
        <textarea id="isi" name="isi" class="form-control" placeholder="Tulis konten artikel Anda di sini..."
          required><?= isset($artikel['isi']) ? esc($artikel['isi']) : '' ?></textarea>
      </div>

      <div class="form-group">
        <label for="id_kategori" class="form-label">Kategori</label>
        <select id="id_kategori" name="id_kategori" class="form-control">
          <option value="">-- Pilih Kategori --</option>
          <?php foreach($kategori as $k): ?>
          <option value="<?= $k['id_kategori']; ?>"
            <?= (isset($artikel['id_kategori']) && $artikel['id_kategori'] == $k['id_kategori']) ? 'selected' : ''; ?>>
            <?= esc($k['nama_kategori']); ?>
          </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label for="status" class="form-label">Status Publikasi</label>
        <select id="status" name="status" class="form-control">
          <option value="draft" <?= (isset($artikel['status']) && $artikel['status'] == 'draft') ? 'selected' : ''; ?>>
            Draft</option>
          <option value="publish"
            <?= (isset($artikel['status']) && $artikel['status'] == 'publish') ? 'selected' : ''; ?>>Publish</option>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label">Gambar Utama</label>
        <div class="file-upload">
          <input type="file" id="gambar" name="gambar" class="file-upload-input" accept="image/*">
          <label for="gambar" class="file-upload-label">
            <div class="file-upload-icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
              </svg>
              <div class="file-upload-text">Unggah Gambar</div>
              <div class="file-upload-hint">PNG, JPG maksimal 2MB</div>
            </div>
          </label>
        </div>
      </div>

      <button type="submit" class="btn">
        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
          <polyline points="17 21 17 13 7 13 7 21"></polyline>
          <polyline points="7 3 7 8 15 8"></polyline>
        </svg>
        <?= isset($artikel['id']) ? 'Update Artikel' : 'Simpan Artikel' ?>
      </button>
    </form>
  </div>
</div>
form_edit.php

<div class="container">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-header">
      <h1><?= $title; ?></h1>
      <div class="action-buttons">
        <button type="button" class="btn btn-secondary" onclick="history.back()">
          <i class="fas fa-arrow-left"></i> Kembali
        </button>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save"></i> Simpan Artikel
        </button>
      </div>
    </div>

    <div class="form-content">
      <div class="content-main">
        <div class="card">
          <div class="form-group">
            <label for="judul">Judul Artikel</label>
            <input type="text" name="judul" id="judul" value="<?= isset($data['judul']) ? $data['judul'] : ''; ?>"
              placeholder="Masukkan judul artikel" required>
          </div>
        </div>

        <div class="card">
          <div class="form-group">
            <label for="isi">Isi Artikel</label>
            <textarea name="isi" id="isi" placeholder="Tulis isi artikel..."
              required><?= isset($data['isi']) ? $data['isi'] : ''; ?></textarea>
          </div>
        </div>
      </div>

      <div class="content-sidebar">
        <div class="card">
          <div class="form-group">
            <label for="id_kategori">Kategori</label>
            <select name="id_kategori" id="id_kategori" required>
              <option value="">Pilih Kategori</option>
              <?php foreach ($kategori as $cat): ?>
              <option value="<?= $cat['id_kategori']; ?>"
                <?= (isset($data['id_kategori']) && $data['id_kategori'] == $cat['id_kategori']) ? 'selected' : ''; ?>>
                <?= $cat['nama_kategori']; ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="card">
          <div class="form-group">
            <label>Gambar Artikel</label>
            <div class="file-input">
              <div class="file-upload">
                <input type="file" name="gambar" id="gambar" accept="image/*" onchange="previewImage(this)">
                <div class="upload-content">
                  <i class="fas fa-cloud-upload-alt"></i>
                  <p>Klik atau drop gambar di sini</p>
                </div>
              </div>

              <?php if (isset($data['gambar']) && $data['gambar']): ?>
              <div id="image-preview-container">
                <img src="<?= base_url('uploads/' . $data['gambar']); ?>" alt="Gambar Artikel" class="preview-image"
                  id="image-preview">
              </div>
              <?php else: ?>
              <div id="image-preview-container" style="display: none;">
                <img src="" alt="Preview" class="preview-image" id="image-preview">
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

🧪 7. Testing Fitur

- Menampilkan daftar artikel beserta kategori

- Menambah artikel baru dengan kategori

- Mengedit artikel dan ubah kategori

- Menghapus artikel

<img width="1364" height="707" alt="image" src="https://github.com/user-attachments/assets/2eefed1c-47c0-4a78-98fe-c4b95b0d8d5e" />


<img width="1366" height="1013" alt="screencapture-webku-ct-ws-admin-artikel-add-2025-07-10-19_44_16" src="https://github.com/user-attachments/assets/f7acf92d-64be-4f00-bab3-9a9e7ea2e8e8" />


<img width="1366" height="838" alt="screencapture-webku-ct-ws-admin-artikel-edit-24-2025-07-10-19_48_17" src="https://github.com/user-attachments/assets/56367978-197a-46e2-862f-6e1a77b17278" />

<img width="1365" height="605" alt="image" src="https://github.com/user-attachments/assets/32432c25-1c34-4597-acf4-f077e8e1a20f" />


<img width="1365" height="675" alt="image" src="https://github.com/user-attachments/assets/e8339a4e-3aad-4bf4-9bc9-429bce42f299" />


# 📌 Tugas

### 1. Modifikasi tampilan artikel/detail.php untuk menampilkan nama kategori artikel.

```php
<?= $this->include('template/header'); ?>

<div class="container">
  <article class="article">
    <div class="article-header">
      <h1 class="article-title"><?= esc($artikel['judul']); ?></h1>
      <div class="article-meta">
        <span class="category-badge">Kategori: <?= esc($artikel['nama_kategori']); ?></span>
      </div>
    </div>

    <div class="article-content">
      <div class="article-image-container">
        <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" alt="<?= esc($artikel['judul']); ?>"
          class="article-image">
      </div>

      <div class="article-text">
        <?= $artikel['isi']; ?>
      </div>
    </div>
  </article>
</div>

<?= $this->include('template/footer'); ?>
```

🖼️ _Screenshot Tampilan Artikel Detail dengan menampilkan Ketegori Artikel :_

<img width="1365" height="669" alt="image" src="https://github.com/user-attachments/assets/3fa80931-d821-42a4-843b-2b03cba9563b" />

---

### 2. Tambahkan fitur menampilkan daftar kategori di halaman depan (opsional).

```php
<?= $this->include('template/header'); ?>

<div class="content-wrapper">
  <!-- Categories Section -->
  <aside class="categories-sidebar">
    <h3 class="sidebar-title">Explore Categories</h3>
    <ul class="category-list">
      <?php if ($kategori): foreach ($kategori as $cat): ?>
      <li
        class="category-item <?= (isset($current_category) && $current_category == $cat['id_kategori']) ? 'active' : '' ?>">
        <a href="<?= base_url('/kategori/' . $cat['id_kategori']); ?>" class="category-link">
          <?= $cat['nama_kategori']; ?>
        </a>
      </li>
      <?php endforeach; else: ?>
      <li class="category-item">No categories found</li>
      <?php endif; ?>
    </ul>
  </aside>

  <!-- Main Articles Grid -->
  <main class="articles-grid">
    <?php if ($artikel): foreach ($artikel as $row): ?>
    <article class="article-card">
      <div class="article-meta">
        <span
          class="article-category <?= (isset($current_category) && $current_category == $row['id_kategori']) ? 'active-category' : '' ?>">
          <?= $row['nama_kategori'] ?>
        </span>

        <time class="article-date"><?= date('M d, Y', strtotime($row['created_at'])); ?></time>
      </div>
      <div class="article-image-container">
        <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
          <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>" class="article-image">
        </a>
      </div>
      <div class="article-content">
        <h2 class="article-title">
          <a href="<?= base_url('/artikel/' . $row['slug']); ?>"><?= $row['judul']; ?></a>
        </h2>
        <p class="article-excerpt"><?= substr($row['isi'], 0, 150); ?>...</p>
        <a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="read-more-button">
          Read More <span class="arrow">→</span>
        </a>
      </div>
    </article>
    <?php endforeach; else: ?>
    <div class="no-articles">
      <h3>No articles found</h3>
      <p>Check back later for new content</p>
    </div>
    <?php endif; ?>
  </main>
</div>

<?= $this->include('template/footer'); ?>
```

🖼️ _Screenshot Tampilan Daftar Kategori Halaman Depan :_

<img width="1366" height="3249" alt="screencapture-webku-ct-ws-artikel-2025-07-10-19_56_14" src="https://github.com/user-attachments/assets/13ccd510-ea3e-432d-9672-819e68b918bf" />

### 3. Buat fungsi untuk menampilkan artikel berdasarkan kategori tertentu (opsional).

```php
 public function kategori($id_kategori)
{
    $artikelModel = new \App\Models\ArtikelModel();
    $kategoriModel = new \App\Models\KategoriModel();

    $kategori = $kategoriModel->find($id_kategori);
    if (!$kategori) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Kategori tidak ditemukan");
    }

    $artikel = $artikelModel->getArtikelDenganKategori($id_kategori);

    $data = [
        'judul' => 'Kategori: ' . $kategori['nama_kategori'],
        'artikel' => $artikel,
        'kategori' => $kategoriModel->findAll(),
        'current_category' => $id_kategori // Tambahkan ini
    ];

    return view('artikel/index', $data);
}
```

## ✅ Kesimpulan

Melalui praktikum ini, saya berhasil memahami dan mengimplementasikan:

- Relasi antar tabel (khususnya One-to-Many) pada sistem database relasional.
- Penggunaan **Query Builder** untuk melakukan operasi join dan filtering data secara efisien.
- Integrasi antara **Model**, **Controller**, dan **View** dalam CodeIgniter untuk menampilkan data dari tabel yang berelasi.
- Pengelolaan dan tampilan artikel yang sudah terkategori dengan baik, termasuk fitur tambah, edit, hapus, dan filter artikel berdasarkan kategori.

Pemahaman dan penerapan konsep ini sangat penting dalam pengembangan aplikasi web yang skalabel dan terstruktur.

---

# Praktikum 8: AJAX

## 📌 Tujuan

- Memahami konsep AJAX dan cara kerjanya.
- Mengimplementasikan AJAX pada aplikasi web dengan CodeIgniter 4.
- Melatih kemampuan problem solving dan debugging.

---

## 🧩 Langkah-langkah Praktikum

### 1. **Persiapan**

- Pastikan project `lab11_ci` dari praktikum sebelumnya sudah tersedia di dalam folder `htdocs`.
- Buka project menggunakan VS Code atau text editor lainnya.

---

### 2. **Menambahkan jQuery**

- Download jQuery dari: [https://jquery.com](https://jquery.com)
- Ekstrak dan salin `jquery-3.6.0.min.js` ke folder `public/assets/js/`

<img width="333" height="103" alt="assets (1)" src="https://github.com/user-attachments/assets/f612a640-ba1f-4fd5-97ef-18643b775cee" />

## ![Artikel](img/assets.png)

### 3. **Membuat Controller `AjaxController`**

Buat file baru di `app/Controllers/AjaxController.php`:

```php
<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class AjaxController extends Controller
{
    public function index()
    {
        return view('ajax/index');
    }

    public function getData()
    {
        $artikelModel = new ArtikelModel();
        $kategori = $this->request->getGet('kategori');
        $page = $this->request->getGet('page') ?? 1;
        $limit = 5;
        $offset = ($page - 1) * $limit;

        $builder = $artikelModel->select('artikel.*, kategori.nama_kategori')
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori');

        if (!empty($kategori)) {
            $builder->where('kategori.nama_kategori', $kategori);
        }

        $total = $builder->countAllResults(false);
        $data = $builder->findAll($limit, $offset);

        return $this->response->setJSON([
            'data' => $data,
            'totalPages' => ceil($total / $limit),
            'currentPage' => (int)$page
        ]);
    }

    public function save()
    {
        $artikelModel = new ArtikelModel();
        $kategoriModel = new KategoriModel();

        $namaKategori = $this->request->getPost('kategori');
        $kategori = $kategoriModel->where('nama_kategori', $namaKategori)->first();

        if (!$kategori) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Kategori tidak ditemukan']);
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'id_kategori' => $kategori['id_kategori'],
            'status' => $this->request->getPost('status')
        ];

        $artikelModel->insert($data);

        return $this->response->setJSON(['status' => 'success']);
    }

    public function edit($id)
    {
        $artikelModel = new ArtikelModel();
        $kategoriModel = new KategoriModel();

        $namaKategori = $this->request->getPost('kategori');
        $kategori = $kategoriModel->where('nama_kategori', $namaKategori)->first();

        if (!$kategori) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Kategori tidak ditemukan']);
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'id_kategori' => $kategori['id_kategori'],
            'status' => $this->request->getPost('status')
        ];

        $artikelModel->update($id, $data);

        return $this->response->setJSON(['status' => 'updated']);
    }

    public function delete($id)
    {
        $artikelModel = new ArtikelModel();
        $artikelModel->delete($id);

        return $this->response->setJSON(['status' => 'deleted']);
    }
}
```

---

### 4. Membuat View ajax/index.php

Buat file baru di `app/Views/ajax/index.php`:

```php
<?= $this->include('template/header'); ?>

<h1>Data Artikel</h1>
<table class="table-data" id="artikelTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
<script>
$(document).ready(function() {
    function showLoadingMessage() {
        $('#artikelTable tbody').html('<tr><td colspan="4">Loading data...</td></tr>');
    }

    function loadData() {
        showLoadingMessage();
        $.ajax({
            url: "<?= base_url('ajax/getData') ?>",
            method: "GET",
            dataType: "json",
            success: function(data) {
                var tableBody = "";
                data.forEach(function(row) {
                    tableBody += '<tr>';
                    tableBody += '<td>' + row.id + '</td>';
                    tableBody += '<td>' + row.judul + '</td>';
                    tableBody += '<td><span class="status">---</span></td>';
                    tableBody += '<td>';
                    tableBody += '<a href="<?= base_url('artikel/edit/') ?>' + row.id + '" class="btn btn-primary">Edit</a> ';
                    tableBody += '<a href="#" class="btn btn-danger btn-delete" data-id="' + row.id + '">Delete</a>';
                    tableBody += '</td></tr>';
                });
                $('#artikelTable tbody').html(tableBody);
            }
        });
    }

    loadData();

    $(document).on('click', '.btn-delete', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        if (confirm('Apakah Anda yakin ingin menghapus artikel ini?')) {
            $.ajax({
                url: "<?= base_url('artikel/delete/') ?>" + id,
                method: "DELETE",
                success: function() {
                    loadData();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error deleting article: ' + textStatus + " " + errorThrown);
                }
            });
        }
    });
});
</script>

<?= $this->include('template/footer'); ?>
```

---

### 5. Sesuaikan route di `app/Config/Routes.php`:

```php
$routes->get('ajax', 'AjaxController::index');
$routes->get('ajax/create', 'AjaxController::create');
$routes->get('ajax/getData', 'AjaxController::getData');
$routes->post('ajax/add', 'AjaxController::add');
$routes->post('ajax/save', 'AjaxController::save');
$routes->post('ajax/edit/(:num)', 'AjaxController::edit/$1');
$routes->delete('ajax/delete/(:num)', 'AjaxController::delete/$1');
```

## 📌 Deskripsi

Praktikum ini bertujuan untuk mengimplementasikan fitur **pencarian (search)** dan **pagination (halaman)** pada data artikel menggunakan teknik **AJAX** di dalam framework **CodeIgniter 4**. Dengan teknik ini, data akan diambil dari server tanpa harus me-refresh halaman, sehingga dapat meningkatkan **User Experience (UX)** aplikasi web.

---

## 🎯 Tujuan

1. Memahami konsep dasar penggunaan AJAX dalam pagination dan search.
2. Mengimplementasikan fitur pagination dan search dengan AJAX di CodeIgniter 4.
3. Meningkatkan performa dan kenyamanan pengguna aplikasi web (UX).

---

## 🛠️ Tools dan Persiapan

- **Text Editor**: VSCode
- **Database**: MySQL Server (gunakan database `lab_ci4`)
- **Framework**: CodeIgniter 4
- **Library**: jQuery (via CDN)

---

## 📂 Struktur Folder

Pastikan folder `lab11_ci` sudah tersedia dan digunakan sebagai dasar praktikum ini.

---

## 🚀 Langkah-langkah Praktikum

### 1. Persiapan Awal

- Pastikan MySQL Server berjalan.
- Database `lab_ci4` aktif dan memiliki tabel:
  - `artikel`
  - `kategori`
- jQuery tersedia (gunakan CDN: `https://code.jquery.com/jquery-3.7.1.min.js`)

---

### 2. Modifikasi Controller `Artikel.php`

Edit method `admin_index()` agar:

- Memfilter data berdasarkan **keyword** (`q`) dan **kategori**
- Menggunakan `paginate()` untuk membagi halaman
- Jika request adalah AJAX, kembalikan data dalam bentuk JSON

```php
public function admin_index()
{
    $title = 'Daftar Artikel';
    $q = $this->request->getVar('q') ?? '';
    $kategoriId = $this->request->getVar('kategori');
    $sort = $this->request->getVar('sort');

    $model = new ArtikelModel();
    $model->select('artikel.*, kategori.nama_kategori')
          ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left');

    if (!empty($q)) {
        $model->like('judul', $q)->orLike('isi', $q);
    }

    if (!empty($kategoriId)) {
        $model->where('artikel.id_kategori', $kategoriId);
    }

    // Sorting
    if ($sort == 'judul_asc') {
        $model->orderBy('judul', 'ASC');
    } elseif ($sort == 'judul_desc') {
        $model->orderBy('judul', 'DESC');
    }

    // AJAX: kembalikan dalam format JSON
   if ($this->request->isAJAX()) {
    $perPage = 5;
    $page = (int) $this->request->getVar('page') ?? 1;

    $artikel = $model->paginate($perPage, 'default', $page);
    $pager = $model->pager;

    return $this->response->setJSON([
        'success' => true,
        'artikel' => $artikel,
        'pagination' => $pager->makeLinks($page, $perPage, $model->pager->getTotal(), 'default_full')
    ]);
}
```

---

### 3. Modifikasi View admin_index.php

- Tambahkan form pencarian dan filter kategori.

- Hapus render HTML tabel statis.

- Tambahkan elemen kosong untuk menampung hasil AJAX.

- Gunakan jQuery untuk fetch data dan render ke halaman.
  **Struktur Elemen HTML:**

```js
<?= $this->include('template/admin_header'); ?>
<form id="filterForm" method="get" class="form-search">
  <input type="text" name="q" id="q" placeholder="Cari artikel...">

  <select name="kategori" id="kategori">
    <option value="">Semua Kategori</option>
    <?php foreach ($kategori as $cat): ?>
    <option value="<?= $cat['id_kategori']; ?>">
      <?= esc($cat['nama_kategori']); ?>
    </option>
    <?php endforeach; ?>
  </select>

  <select name="sort" id="sort">
    <option value="">Urutkan</option>
    <option value="judul_asc">Judul A-Z</option>
    <option value="judul_desc">Judul Z-A</option>
  </select>

  <button type="submit" class="btn">Cari</button>
</form>

<!-- Loading Indicator -->
<div id="loading" class="loading-wrapper">
  <!-- From Uiverse.io by gustavofusco -->
  <svg xmlns="http://www.w3.org/2000/svg" height="200px" width="200px" viewBox="0 0 200 200" class="pencil">
    <defs>
      <clipPath id="pencil-eraser">
        <rect height="30" width="30" ry="5" rx="5"></rect>
      </clipPath>
    </defs>
    <circle transform="rotate(-113,100,100)" stroke-linecap="round" stroke-dashoffset="439.82"
      stroke-dasharray="439.82 439.82" stroke-width="2" stroke="currentColor" fill="none" r="70" class="pencil__stroke">
    </circle>
    <g transform="translate(100,100)" class="pencil__rotate">
      <g fill="none">
        <circle transform="rotate(-90)" stroke-dashoffset="402" stroke-dasharray="402.12 402.12" stroke-width="30"
          stroke="hsl(223,90%,50%)" r="64" class="pencil__body1"></circle>
        <circle transform="rotate(-90)" stroke-dashoffset="465" stroke-dasharray="464.96 464.96" stroke-width="10"
          stroke="hsl(223,90%,60%)" r="74" class="pencil__body2"></circle>
        <circle transform="rotate(-90)" stroke-dashoffset="339" stroke-dasharray="339.29 339.29" stroke-width="10"
          stroke="hsl(223,90%,40%)" r="54" class="pencil__body3"></circle>
      </g>
      <g transform="rotate(-90) translate(49,0)" class="pencil__eraser">
        <g class="pencil__eraser-skew">
          <rect height="30" width="30" ry="5" rx="5" fill="hsl(223,90%,70%)"></rect>
          <rect clip-path="url(#pencil-eraser)" height="30" width="5" fill="hsl(223,90%,60%)"></rect>
          <rect height="20" width="30" fill="hsl(223,10%,90%)"></rect>
          <rect height="20" width="15" fill="hsl(223,10%,70%)"></rect>
          <rect height="20" width="5" fill="hsl(223,10%,80%)"></rect>
          <rect height="2" width="30" y="6" fill="hsla(223,10%,10%,0.2)"></rect>
          <rect height="2" width="30" y="13" fill="hsla(223,10%,10%,0.2)"></rect>
        </g>
      </g>
      <g transform="rotate(-90) translate(49,-30)" class="pencil__point">
        <polygon points="15 0,30 30,0 30" fill="hsl(33,90%,70%)"></polygon>
        <polygon points="15 0,6 30,0 30" fill="hsl(33,90%,50%)"></polygon>
        <polygon points="15 0,20 10,10 10" fill="hsl(223,10%,10%)"></polygon>
      </g>
    </g>
  </svg>
</div>


<!-- Container untuk artikel -->
<div id="artikelTableContainer"></div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
function loadArtikel(page = 1) {
  $('#loading').show();
  const q = $('#q').val();
  const kategori = $('#kategori').val();
  const sort = $('#sort').val();

  const startTime = new Date().getTime(); // waktu mulai

  $.ajax({
    url: `<?= base_url('admin/artikel') ?>?page=${page}`,
    type: 'GET',
    dataType: 'json',
    data: {
      q,
      kategori,
      sort
    },
    success: function(response) {
      const endTime = new Date().getTime();
      const elapsed = endTime - startTime;
      const delay = Math.max(1000 - elapsed, 0); // sisa waktu agar total tetap 5 detik

      setTimeout(() => {
        $('#loading').hide();

        if (response.success) {
          let html = `<table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>`;

          if (response.artikel.length > 0) {
            response.artikel.forEach(row => {
              html += `<tr>
                  <td>${row.id}</td>
                  <td><b>${row.judul}</b><p><small>${row.isi.substring(0, 50)}...</small></p></td>
                  <td>${row.nama_kategori ?? 'Tidak ada'}</td>
                  <td>${row.status}</td>
                  <td>
                    <a class="btn btn-primary" href="/admin/artikel/edit/${row.id}">Ubah</a>
                    <a class="btn btn-danger" href="/admin/artikel/delete/${row.id}" onclick="return confirm('Yakin menghapus data?');">Hapus</a>
                  </td>
                </tr>`;
            });
          } else {
            html += `<tr><td colspan="5">Belum ada data.</td></tr>`;
          }

          html += `</tbody></table><div class="pagination">${response.pagination}</div>`;
          $('#artikelTableContainer').html(html);
        }
      }, delay);
    },
    error: function(xhr, status, error) {
      const endTime = new Date().getTime();
      const elapsed = endTime - startTime;
      const delay = Math.max(1000 - elapsed, 0);

      setTimeout(() => {
        $('#loading').hide();
        $('#artikelTableContainer').html('<p>Terjadi kesalahan saat memuat data.</p>');
      }, delay);
    }
  });
}


// Trigger pertama kali
$(document).ready(function() {
  loadArtikel();

  $('#filterForm').on('submit', function(e) {
    e.preventDefault();
    loadArtikel();
  });

  // Untuk pagination dinamis
  $(document).on('click', '.pagination a', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');
    const urlParams = new URLSearchParams(href.split('?')[1]);
    const page = urlParams.get('page') ?? 1;

    loadArtikel(page);
  });

});
</script>

<?= $this->include('template/admin_footer'); ?>
```

### ✅ Fitur Tambahan (Opsional)

- Tambahkan indikator loading saat mengambil data.

- Tambahkan fitur sorting berdasarkan judul/artikel menggunakan parameter sort=judul_asc|judul_desc dalam URL AJAX.

### 🧪 Pengujian dan Screenshot

**Buka halaman admin artikel**
<img width="1318" height="545" alt="image" src="https://github.com/user-attachments/assets/3ee96971-97e9-4993-b093-a79318ea3c96" />


---

### 📝 Kesimpulan

- Kita telah memanfaatkan AJAX untuk mengambil data artikel secara dinamis.

- Fitur pagination dan search menjadi lebih responsif karena tidak perlu reload halaman.

- Implementasi ini meningkatkan UX dan performa aplikasi web.

- Teknik ini penting dalam pengembangan aplikasi modern berbasis web.

---

# Praktikum 10 - REST API dengan CodeIgniter 4

## 📌 Deskripsi

Praktikum ini membahas penerapan konsep REST API menggunakan framework CodeIgniter 4. REST API memungkinkan backend dan frontend dapat berkomunikasi dengan protokol HTTP (GET, POST, PUT, DELETE), serta memudahkan integrasi antar platform.

---

## 🎯 Tujuan Praktikum

- Memahami konsep dasar **API (Application Programming Interface)**.
- Memahami prinsip kerja **RESTful API**.
- Menerapkan **CRUD (Create, Read, Update, Delete)** menggunakan REST API di CodeIgniter.
- Menguji endpoint API dengan aplikasi **Postman**.

---

## 📖 Apa itu REST API?

REST API (Representational State Transfer) adalah standar arsitektur untuk membuat web service yang bersifat ringan, cepat, dan mudah diakses oleh berbagai platform.

### Analogi REST API:

REST API seperti daftar menu restoran. Pelanggan (client) hanya bisa memesan berdasarkan menu yang tersedia, meskipun koki (server) sebenarnya bisa membuat lebih banyak jenis makanan. Tujuannya adalah membatasi akses terhadap sumber daya agar tetap aman dan terstruktur.

---

## 🛠️ Langkah-langkah Praktikum

### 1. Persiapan Awal

- Pastikan folder `lab11_ci` sudah ada di dalam `htdocs`.
- Install aplikasi Postman dari: [https://www.postman.com/downloads/](https://www.postman.com/downloads/)

---

### 2. Membuat REST Controller

Buat file `Post.php` pada direktori `app/Controllers`, lalu tambahkan kode berikut:

```php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ArtikelModel;

class Post extends ResourceController
{
    use \CodeIgniter\API\ResponseTrait;

    public function index()
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }

    public function create()
    {
        $model = new ArtikelModel();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi'   => $this->request->getVar('isi')
        ];
        $model->insert($data);
        return $this->respondCreated(['message' => 'Data berhasil ditambahkan']);
    }

    public function show($id = null)
    {
        $model = new ArtikelModel();
        $data = $model->where('id', $id)->first();
        return $data ? $this->respond($data) : $this->failNotFound('Data tidak ditemukan');
    }

    public function update($id = null)
    {
        $model = new ArtikelModel();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi'   => $this->request->getVar('isi')
        ];
        $model->update($id, $data);
        return $this->respond(['message' => 'Data berhasil diupdate']);
    }

    public function delete($id = null)
    {
        $model = new ArtikelModel();
        $model->delete($id);
        return $this->respondDeleted(['message' => 'Data berhasil dihapus']);
    }
}
```

---

#### 3. Menambahkan Routing API

Edit file app/Config/Routes.php, tambahkan:

```php
$routes->resource('post');
```

Kemudian cek dengan perintah:

```bash
php spark routes
```


---

### 4. Testing REST API CodeIgniter

Buka aplikasi postman dan pilih create new → HTTP Request


---

### 5. Pengujian API Menggunakan Postman

#### **a. Menampilkan Semua Data Method: GET**

URL: http://localhost:8080/post


---

#### **b. Menampilkan Data Spesifik**

Method: GET

URL: http://localhost:8080/post/1



---

#### **c. Menambahkan Data**

Method: POST

URL: http://localhost:8080/post

Body: x-www-form-urlencoded

judul: Judul Artikel 7

isi: Isi Artikel ke 7 ditambah melalui API by Nurulfir

---

#### **d. Mengubah Data**

Method: PUT

URL: http://localhost:8080/post/7

Body: x-www-form-urlencoded

judul: Judul Artikel 7 diubah

isi: Isi Artikel ke 7 diubah melalui API by Nurulfir


---

### **e. Menghapus Data**

Method: DELETE

URL: http://localhost:8080/post/7

📸 Screenshot:

## ![REST API Menghapus Data](img/rest_api_menghapusdata.png)

---

### 📌 Penjelasan Fungsi Method pada REST Controller

| Method     | Fungsi                                       |
| ---------- | -------------------------------------------- |
| `index()`  | Menampilkan semua data artikel               |
| `show()`   | Menampilkan satu data artikel berdasarkan ID |
| `create()` | Menambahkan data baru                        |
| `update()` | Mengubah data yang ada                       |
| `delete()` | Menghapus data berdasarkan ID                |

---

## ✅ Kesimpulan

Pada praktikum ini kita telah mempelajari:

- ✅ Konsep dasar REST API dan penggunaannya dalam pengembangan web modern.

- ✅ Cara membangun REST API menggunakan CodeIgniter 4.

- ✅ Implementasi operasi CRUD melalui endpoint HTTP: GET, POST, PUT, DELETE.

- ✅ Pengujian endpoint API menggunakan Postman.

Dengan REST API, pengembangan aplikasi menjadi lebih modular, efisien, dan fleksibel, sehingga dapat dengan mudah diintegrasikan dengan berbagai frontend seperti Vue, React, bahkan aplikasi mobile Android/iOS.

---

# Praktikum 11: VueJS dan Frontend API

### Tujuan

1. Memahami konsep dasar API.
2. Memahami konsep dasar framework VueJS.
3. Membuat frontend API menggunakan framework VueJS 3.

---

# Persiapan Awal

### 1. Alat dan Bahan

- **Text Editor**: Disarankan menggunakan [Visual Studio Code](https://code.visualstudio.com/).
- **Browser**: Chrome/Firefox.
- **Webserver**: XAMPP atau sejenisnya.
- **API Backend**: Aplikasi REST API berjalan di `http://localhost/labci4/public`.

### 2. Buat Folder Project

Buat folder dengan nama `lab8_vuejs` di dalam folder `htdocs` atau `www`.

### 3. Struktur Direktori

Buat struktur direktori dan file berikut:

<img width="371" height="162" alt="direktori_lab8vuejs" src="https://github.com/user-attachments/assets/6c2d2475-c72d-4e2e-8541-0f7c8e101927" />


---

## Langkah-Langkah Praktikum

### 1. Tambahkan Library di `index.html`

Masukkan VueJS dan Axios melalui CDN di dalam `<head>`:

```html
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
```

---

### 2. Membuat Tampilan Utama (index.html)

Gunakan template berikut:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artikel Management</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div id="app">
      <button id="btn-tambah" @click="tambah">
        <i class="fas fa-plus"></i> Tambah Artikel
      </button>

      <div class="modal" v-if="showForm">
        <div class="modal-content">
          <span class="close" @click="showForm = false">&times;</span>
          <form id="form-data" @submit.prevent="saveData">
            <h3 id="form-title">
              <i :class="formData.id ? 'fas fa-edit' : 'fas fa-plus'"></i>
              {{ formTitle }}
            </h3>
            <div>
              <input
                type="text"
                v-model="formData.judul"
                placeholder="Judul Artikel"
                required
              />
            </div>
            <div>
              <textarea
                v-model="formData.isi"
                rows="10"
                placeholder="Isi artikel..."
              ></textarea>
            </div>
            <div>
              <select v-model.number="formData.status">
                <option v-for="option in statusOptions" :value="option.value">
                  {{ option.text }}
                </option>
              </select>
            </div>
            <input type="hidden" v-model="formData.id" />
            <button type="submit" id="btnSimpan">
              <i class="fas fa-save"></i> Simpan
            </button>
            <button type="button" @click="showForm = false">
              <i class="fas fa-times"></i> Batal
            </button>
          </form>
        </div>
      </div>

      <h1><i class="fas fa-newspaper"></i> Daftar Artikel</h1>

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(row, index) in artikel" :key="row.id">
            <td class="center-text">{{ row.id }}</td>
            <td>{{ row.judul }}</td>
            <td>
              <span :class="'status-badge status-' + statusClass(row.status)">
                {{ statusText(row.status) }}
              </span>
            </td>
            <td class="center-text">
              <a href="#" @click="edit(row)" class="action-link edit-link">
                <i class="fas fa-edit"></i> Edit
              </a>
              <a
                href="#"
                @click="hapus(index, row.id)"
                class="action-link delete-link"
              >
                <i class="fas fa-trash-alt"></i> Hapus
              </a>
            </td>
          </tr>
          <tr v-if="artikel.length === 0">
            <td colspan="4" class="empty-state">
              <i
                class="fas fa-inbox"
                style="font-size: 2rem; margin-bottom: 1rem"
              ></i>
              <p>Tidak ada artikel yang tersedia.</p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <script src="assets/app.js"></script>
  </body>
</html>
```

---

### 3. Menambahkan Logika VueJS di app.js

```js
const { createApp } = Vue;

const apiUrl = 'http://localhost/labci4/public';

createApp({
  data() {
    return {
      artikel: [],
      formData: {
        id: null,
        judul: '',
        isi: '',
        status: 0,
      },
      showForm: false,
      formTitle: 'Tambah Data',
      statusOptions: [
        { text: 'Draft', value: 0 },
        { text: 'Publish', value: 1 },
      ],
    };
  },
  mounted() {
    this.loadData();
  },
  methods: {
    loadData() {
      axios
        .get(apiUrl + '/post')
        .then((response) => {
          this.artikel = response.data.artikel.map((item) => ({
            ...item,
            status: Number(item.status),
          }));
        })
        .catch((error) => console.error('Error:', error));
    },
    tambah() {
      this.showForm = true;
      this.formTitle = 'Tambah Data';
      this.formData = {
        id: null,
        judul: '',
        isi: '',
        status: 0,
      };
    },
    edit(data) {
      this.showForm = true;
      this.formTitle = 'Ubah Data';
      this.formData = {
        id: data.id,
        judul: data.judul,
        isi: data.isi,
        status: Number(data.status),
      };
    },
    hapus(index, id) {
      if (confirm('Yakin menghapus data?')) {
        axios
          .delete(apiUrl + '/post/' + id)
          .then(() => {
            this.artikel.splice(index, 1);
          })
          .catch((error) => console.error('Error:', error));
      }
    },
    saveData() {
      this.formData.status = Number(this.formData.status);

      const request = this.formData.id
        ? axios.put(apiUrl + '/post/' + this.formData.id, this.formData)
        : axios.post(apiUrl + '/post', this.formData);

      request
        .then((response) => {
          if (this.formData.id) {
            const index = this.artikel.findIndex(
              (item) => item.id === this.formData.id
            );
            if (index !== -1) {
              this.artikel[index] = { ...this.formData };
            }
          } else {
            this.loadData();
          }
        })
        .catch((error) => {
          console.error('Error:', error.response?.data || error.message);
          alert('Error: ' + (error.response?.data?.message || error.message));
        })
        .finally(() => {
          this.showForm = false;
        });
    },
    statusText(status) {
      const numStatus = Number(status);
      return numStatus === 1 ? 'Publish' : 'Draft';
    },
    statusClass(status) {
      return Number(status);
    },
  },
}).mount('#app');
```

---

### 4. Tambahkan CSS (style.css)

```css
:root {
  --primary: #4361ee;
  --primary-light: #e0e7ff;
  --danger: #ef4444;
  --danger-light: #fee2e2;
  --success: #10b981;
  --success-light: #d1fae5;
  --warning: #f59e0b;
  --warning-light: #fef3c7;
  --dark: #1e293b;
  --light: #f8fafc;
  --gray: #94a3b8;
  --gray-light: #e2e8f0;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', sans-serif;
  background-color: #f1f5f9;
  color: var(--dark);
  line-height: 1.6;
}

#app {
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
}

h1 {
  font-size: 2rem;
  font-weight: 600;
  margin-bottom: 1.5rem;
  color: var(--dark);
}

/* Button Styles */
button {
  cursor: pointer;
  transition: all 0.2s ease;
  border: none;
  border-radius: 0.375rem;
  font-weight: 500;
  padding: 0.5rem 1rem;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
}

#btn-tambah {
  background-color: var(--primary);
  color: white;
  margin-bottom: 1.5rem;
}

#btn-tambah:hover {
  background-color: #3a56d4;
}

#btn-tambah i {
  font-size: 0.9rem;
}

/* Modal Styles */
.modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.modal-content {
  background-color: white;
  padding: 2rem;
  border-radius: 0.5rem;
  width: 100%;
  max-width: 600px;
  box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
}

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: bold;
  cursor: pointer;
  color: var(--gray);
}

.close:hover {
  color: var(--dark);
}

/* Form Styles */
#form-title {
  margin-bottom: 1.5rem;
  color: var(--primary);
}

#form-data div {
  margin-bottom: 1rem;
}

#form-data input[type='text'],
#form-data textarea,
#form-data select {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid var(--gray-light);
  border-radius: 0.375rem;
  font-family: inherit;
  transition: border-color 0.2s;
}

#form-data input[type='text']:focus,
#form-data textarea:focus,
#form-data select:focus {
  outline: none;
  border-color: var(--primary);
  box-shadow: 0 0 0 3px var(--primary-light);
}

#form-data textarea {
  min-height: 150px;
  resize: vertical;
}

#form-data button[type='submit'] {
  background-color: var(--primary);
  color: white;
  margin-right: 0.5rem;
}

#form-data button[type='submit']:hover {
  background-color: #3a56d4;
}

#form-data button[type='button'] {
  background-color: var(--gray-light);
  color: var(--dark);
}

#form-data button[type='button']:hover {
  background-color: #d1d5db;
}

/* Table Styles */
table {
  width: 100%;
  border-collapse: collapse;
  background-color: white;
  border-radius: 0.5rem;
  overflow: hidden;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px -1px rgba(0, 0, 0, 0.1);
}

thead {
  background-color: var(--primary);
  color: white;
}

th {
  padding: 1rem;
  text-align: left;
  font-weight: 600;
}

td {
  padding: 1rem;
  border-bottom: 1px solid var(--gray-light);
}

tr:last-child td {
  border-bottom: none;
}

tr:hover {
  background-color: #f8fafc;
}

.center-text {
  text-align: center;
}

/* Status Badges */
.status-badge {
  display: inline-block;
  padding: 0.25rem 0.5rem;
  border-radius: 9999px;
  font-size: 0.75rem;
  font-weight: 500;
}

.status-0 {
  background-color: var(--warning-light);
  color: var(--warning);
}

.status-1 {
  background-color: var(--success-light);
  color: var(--success);
}

/* Action Links */
.action-link {
  display: inline-flex;
  align-items: center;
  gap: 0.25rem;
  padding: 0.25rem 0.5rem;
  border-radius: 0.25rem;
  text-decoration: none;
  margin: 0 0.25rem;
}

.action-link i {
  font-size: 0.8rem;
}

.edit-link {
  color: var(--primary);
}

.edit-link:hover {
  background-color: var(--primary-light);
}

.delete-link {
  color: var(--danger);
}

.delete-link:hover {
  background-color: var(--danger-light);
}

/* Empty State */
.empty-state {
  text-align: center;
  padding: 2rem;
  color: var(--gray);
}

/* Responsive */
@media (max-width: 768px) {
  #app {
    padding: 1rem;
  }

  table {
    display: block;
    overflow-x: auto;
  }
}
```

---

## Output

<img width="1341" height="682" alt="Cuplikan layar 2025-07-10 201628" src="https://github.com/user-attachments/assets/a3944c10-1186-4de8-aab8-18ffd7a3f942" />

<img width="1161" height="610" alt="image" src="https://github.com/user-attachments/assets/3f5ad35f-6e1a-4512-9d78-86cf8d7dd5c7" />

<img width="1217" height="604" alt="image" src="https://github.com/user-attachments/assets/3590fae4-63bb-4b97-b287-b82b91f1d67a" />

<img width="1334" height="526" alt="image" src="https://github.com/user-attachments/assets/66812f1b-ec65-4fc7-815b-b4a2482b6ca4" />

### ✅ Kesimpulan

- VueJS sangat cocok digunakan untuk membangun aplikasi frontend yang ringan, modular, dan reaktif.

- Praktikum ini memperlihatkan bagaimana VueJS dan Axios dapat bekerja sama untuk membuat aplikasi CRUD sederhana dengan REST API.

- Dengan menggunakan v-model, v-if, v-for, dan @click, interaksi antara data dan tampilan dapat dikelola dengan mudah.

- VueJS versi 3 menyediakan cara yang modern dan efisien untuk membuat aplikasi dinamis tanpa memerlukan tool build tambahan seperti Webpack.

- Pemahaman konsep API dan cara menghubungkannya ke frontend merupakan keterampilan fundamental dalam pengembangan web modern.




