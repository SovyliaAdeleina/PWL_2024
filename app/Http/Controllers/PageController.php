<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function index() {
    return 'Selamat Datang';
}

public function about() {
    return 'Sovylia Adeleina / 2341728007';
}

public function articles($id) {
    return 'Halaman Artikel dengan ID  '.$id;
   }
   
}
