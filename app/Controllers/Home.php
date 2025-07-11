<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function landing()
    {
        return view('landing_page');
    }

    public function berita()
    {
        return view('berita');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function biaya()
    {
        return view('biaya');
    }
}
