<?php

namespace App\controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About','content' => 'Ini Adalah Halaman About Yang Menjelaskan Tentang Isi Halaman Ini.'
        ]);
    }
    public function contact()
    {
        echo "Ini Halaman Contact";
    }
    public function faqs()
    {
        echo "Ini Halaman Faqs";
    }
    public function tos()
    {
        echo "Ini Halaman Term of Services";
    }
}
