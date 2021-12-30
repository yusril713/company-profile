<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class KegiatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('administrator.kegiatan.index', [
            'kegiatan' => Kegiatan::with('strategi')->get()
        ]);
    }

    public function create() {
        return view('administrator.kegiatan.create');
    }

    public function store(Request $request) {
       $request->validate([
           'lingkup_program' => 'required',
           'title' => 'required|min:8',
           'slug' => 'required|unique:tb_kegiatan',
           'gambar' => 'required',
           'konten' => 'required|min:30',
           'file' => 'required',
       ]);

       $kegiatan = new Kegiatan();
       $kegiatan->strategi_id = $request->lingkup_program;
       $kegiatan->title = $request->title;
       $kegiatan->slug = $request->slug;
       $kegiatan->konten = $request->konten;
       $file="";
       if($request->hasfile('gambar')) {
           $file = $request->file('gambar')->store('kegiatan/', 'public');
           $kegiatan->gambar = $file;
       }

       $file="";
       if($request->hasfile('file')) {
           $file = $request->file('file')->store('documents/', 'public');
           $kegiatan->file = $file;
       }
       $kegiatan->save();

       return redirect()->route('manage-kegiatan.index')->with('status', 'Data successfully created...');
    }

    public function edit($id) {
        return view('administrator.kegiatan.edit', [
            'kegiatan' => Kegiatan::findOrFail(Crypt::decrypt($id))
        ]);
    }

    public function update(Request $request, $id) {
        $kegiatan = Kegiatan::findOrFail(Crypt::decrypt($id));
        $kegiatan->strategi_id = $request->lingkup_program;
        $kegiatan->title = $request->title;
        $kegiatan->slug = $request->slug;
        $kegiatan->konten = $request->konten;
        $file="";
        if($request->hasfile('gambar')) {
            $file = $request->file('gambar')->store('kegiatan/', 'public');
            $kegiatan->gambar = $file;
        }

        $file="";
        if($request->hasfile('file')) {
            if(file_exists(storage_path('app/public/' . $kegiatan->gambar)))
                unlink(storage_path('app/public/' . $kegiatan->gambar));
            if(file_exists(storage_path('app/public/' . $kegiatan->file)))
                unlink(storage_path('app/public/' . $kegiatan->file));
            $file = $request->file('file')->store('documents/', 'public');
            $kegiatan->file = $file;
        }
        $kegiatan->save();
        return redirect()->route('manage-kegiatan.index')->with('status', 'Data successfully changed...');
    }

    public function destroy($id) {
        $kegiatan = Kegiatan::findOrFail(Crypt::decrypt($id));
        if(file_exists(storage_path('app/public/' . $kegiatan->gambar)))
            unlink(storage_path('app/public/' . $kegiatan->gambar));
        if(file_exists(storage_path('app/public/' . $kegiatan->file)))
            unlink(storage_path('app/public/' . $kegiatan->file));
        $kegiatan->delete();
        return redirect()->route('manage-kegiatan.index')->with('status', 'Data successfully removed...');
    }
}
