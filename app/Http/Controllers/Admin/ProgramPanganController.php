<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramPangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProgramPanganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('administrator.program-pangan.index', [
            'pangan' => ProgramPangan::all()
        ]);
    }

    public function create() {
        return view('administrator.program-pangan.create');
    }

    public function store(Request $request) {
        $p = new ProgramPangan();
        $p->title = $request->title;
        $p->deskripsi = $request->deskripsi;
        $file="";
        if($request->hasfile('gambar')) {
            $file = $request->file('gambar')->store('program_pangan', 'public');
            $p->gambar = $file;
        }
        $p->save();
        return redirect()->route('manage-pangan.index')->with('status', 'Data successfully created...');
    }

    public function edit($id) {
        return view('administrator.program-pangan.edit', [
            'pangan' => ProgramPangan::findOrFail(Crypt::decrypt($id))
        ]);
    }

    public function update(Request $request, $id) {
        $p = ProgramPangan::findOrFail(Crypt::decrypt($id));
        $p->title = $request->title;
        $p->deskripsi = $request->deskripsi;
        $file="";
        if($request->hasfile('gambar')) {
            unlink(storage_path('app/public/' . $p->gambar));
            $file = $request->file('gambar')->store('program_pangan', 'public');
            $p->gambar = $file;
        }
        $p->save();
        return redirect()->route('manage-pangan.index')->with('status', 'Data successfully changed...');
    }

    public function destroy($id) {
        $p = ProgramPangan::findOrFail(Crypt::decrypt($id));
        unlink(storage_path('app/public/' . $p->gambar));
        $p->delete();
        return redirect()->route('manage-pangan.index')->with('status', 'Data successfully removed...');
    }
}
