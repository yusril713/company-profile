<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class SertifikatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('administrator.sertifikat.index', [
            'sertifikat' => Sertifikat::all()
        ]);
    }

    public function create() {
        $tipe = ['Dokumen', 'Gambar'];
        return view('administrator.sertifikat.create', [
            'tipe' => $tipe
        ]);
    }

    public function store(Request $request) {
        $sertifikat = new Sertifikat();
        $sertifikat->tipe = $request->tipe;
        $sertifikat->title = $request->title;

        $file="";
        if($request->hasfile('kontent')) {
            $file = $request->file('kontent')->store('sertifikat', 'public');
            $sertifikat->kontent = $file;
        }
        $sertifikat->save();

        return redirect()->route('manage-sertifikat.index')->with('status', 'Data successfully created...');
    }

    public function edit($id) {
        return redirect()->route('manage-sertifikat.index');
    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {
        $sertifikat = Sertifikat::findOrFail(Crypt::decrypt($id));
        unlink(storage_path('app/public/'. $sertifikat->kontent));
        $sertifikat->delete();
        return redirect()->route('manage-sertifikat.index')->with('status', 'Data successfully removed...');
    }
}
