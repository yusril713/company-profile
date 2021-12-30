<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class GaleriController extends Controller
{
    public function photos() {
        return view('user.gallery.photo', [
            'photo' => Galeri::where('tipe', 'Gambar')->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function videos() {
        return view('user.gallery.video', [
            'video' =>  Galeri::where('tipe', 'Video')->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function detail($id) {
        return view('user.gallery.detail-photo', [
            'photo' => Galeri::with('detail')->findOrFail(Crypt::decrypt($id))
        ]);
        // return Galeri::with('detail')->findOrFail(Crypt::decrypt($id));
    }
}
