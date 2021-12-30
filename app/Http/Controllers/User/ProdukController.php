<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        return view('user.produk.index', [
            'produk' => Produk::with('detail_cover')->paginate(12)
        ]);
    }

    public function detail($slug) {
        return view('user.produk.detail', [
            'produk' => Produk::with('image')->where('slug', $slug)->first()
        ]);
    }
}
