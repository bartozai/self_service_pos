<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    public function index(){
        $data = [
            'pageTitle' => 'produk',
            'content' => 'Ini adalah halaman produk .'
        ];

        return view('produk', compact('data'));
    }
}
