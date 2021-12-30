<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\News;
use App\Models\Produk;
use App\Models\Profil;
use App\Models\Sertifikat;
use App\Models\Strategi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome', [
            'profil' => Profil::all(),
            'strategi' => Strategi::all(),
            'galeri' => Galeri::where('tipe', 'Gambar')->orderBy('created_at', 'desc')->limit(6)->get(),
            'video' => Galeri::where('tipe', 'Video')->orderBy('created_at', 'desc')->limit(6)->get(),
            'news' => News::orderBy('created_at', 'desc')->limit(6)->get(),
            'sertifikat' => Sertifikat::all(),
            'produk' => Produk::with('detail_cover')->limit(8)->get()
        ]);
    }
}
