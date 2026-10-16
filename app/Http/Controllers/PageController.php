<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function profil()
    {
        return view('profil');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
