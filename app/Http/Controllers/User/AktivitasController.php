<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use App\Models\ProgramPangan;
use App\Models\RequestFile;
use App\Models\Strategi;
use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    public function activity() {
        return view('user.activity.index', [
            'strategi' => Strategi::all()
        ]);
    }

    public function ProgramPangan() {
        return view('user.activity.program-pangan', [
            'pangan' => ProgramPangan::all()
        ]);
    }

    public function activities() {
        return view('user.activity.kegiatan', [
            'kegiatan' => Kegiatan::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function ActivityDetails($slug) {
        return view('user.activity.detail', [
            'kegiatan' => Kegiatan::where('slug', $slug)->firstOrFail(),
            'latest' => Kegiatan::orderBy('created_at', 'desc')->limit(7)->get()
        ]);
    }

    public function PostRequestFile(Request $request) {
        if($request->ajax()) {
            $req = new RequestFile();
            $req->kegiatan_id = $request->get('kegiatan_id');
            $req->nama = $request->get('nama');
            $req->alamat = $request->get('email');
            $req->jenis_kelamin = $request->get('jenis_kelamin');
            $req->no_telp = $request->get('no_telp');
            $req->save();
            return 'Silakan tunggu, dokumen akan dikirimkan ke email anda';
        }
    }
    
    public function program($slug) {
        $s = Strategi::where('slug', $slug)->first();
        return view('user.activity.kegiatan', [
            'slug' => $slug,
            'kegiatan' => Kegiatan::where('strategi_id', $s->id)->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function detail($slug, $slug2) {
        return view('user.activity.detail', [
            'slug' => $slug,
            'kegiatan' => Kegiatan::where('slug', $slug2)->firstOrFail(),
            'latest' => Kegiatan::with('strategi')->orderBy('created_at', 'desc')->limit(7)->get()
        ]);
        // return 'ok';
    }
}
