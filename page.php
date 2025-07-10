<?php
namespace App\Controllers;
class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Tentang Kami - Webku',
            'content' => 'Webku adalah platform digital yang menyediakan informasi terkini.'
        ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Hubungi Kami - Webku'
        ]);
    }
    public function faqs()
    {
    echo "Ini halaman FAQ";
    }
    public function tos()
    {
    echo "ini halaman Term of Services";
    }
}
