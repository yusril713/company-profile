<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('administrator.profil.index', [
            'profil' => Profil::all()
        ]);
    }

    public function create() {
        return view('administrator.profil.create');
    }

    public function store(Request $request) {
        $profil = new Profil();
        $profil->title = $request->title;
        $profil->konten = $request->konten;
        $profil->save();
        return redirect()->route('manage-profil.index')->with('status', 'Data successfully created...');
    }

    public function edit($id) {
        return view('administrator.profil.edit', [
            'profil' => Profil::findOrFail(Crypt::decrypt($id))
        ]);
    }

    public function update(Request $request, $id) {
        $profil = Profil::findOrFail(Crypt::decrypt($id));
        $profil->title = $request->title;
        $profil->konten = $request->konten;
        $profil->save();
        return redirect()->route('manage-profil.index')->with('status', 'Data successfully changed...');
    }

    public function destroy($id) {
        Profil::findOrFail(Crypt::decrypt($id))->delete();
        return redirect()->route('manage-profil.index')->with('status', 'Data successfully removed...');
    }
}
