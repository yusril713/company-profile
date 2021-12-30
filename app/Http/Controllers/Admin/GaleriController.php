<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\GaleriDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('administrator.galeri.index', [
            'galeri' => Galeri::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function create() {
        return view('administrator.galeri.create');
    }

    public function store(Request $request) {
        $galeri = new Galeri();
        $galeri->title = $request->title;
        $galeri->user_id = Auth::user()->id;
        $galeri->tipe = $request->tipe;
        if ($request->tipe == 'Video') {
            $galeri->link = 'https://www.youtube.com/embed/' . $request->link;
        } elseif ($request->tipe == 'Gambar') {
            $file="";
            if($request->hasfile('gambar')) {
                $file = $request->file('gambar')->store('galeri', 'public');
                $galeri->link = $file;
            }
        }
        $galeri->save();
        return redirect()->route('manage-galeri.index')->with('status', 'Data successfully created...');
        // return $request->all();
    }

    public function edit($id) {
        $galeri = Galeri::findOrFail(Crypt::decrypt($id));
        return view('administrator.galeri.edit', [
            'galeri' => $galeri
        ]);
    }

    public function update(Request $request, $id) {
        $galeri = Galeri::findOrFail(Crypt::decrypt($id));
        $galeri->title = $request->title;
        $galeri->user_id = Auth::user()->id;
        $galeri->tipe = $request->tipe;
        if ($request->tipe == 'Video') {
            $galeri->link = 'https://www.youtube.com/embed/' . $request->link;
        } elseif ($request->tipe == 'Gambar') {
            $file="";
            if($request->hasfile('gambar')) {
                $file = $request->file('gambar')->store('galeri', 'public');
                $galeri->link = $file;
            }
        }
        $galeri->save();
        return redirect()->route('manage-galeri.index')->with('status', 'Data successfully changed...');
    }

    public function destroy($id) {
        $galeri = Galeri::findOrFail(Crypt::decrypt($id));
        if ($galeri->tipe == 'Gambar'){
            unlink(storage_path('app/public/' . $galeri->link));
        }
        $galeri->delete();
        return redirect()->route('manage-galeri.index')->with('status', 'Data successfully removed');
    }

    public function show($id) {
        return view('administrator.galeri.detail.index', [
            'galeri' => Galeri::with('detail')->findOrFail(Crypt::decrypt($id))
        ]);
        // return  Galeri::with('detail')->findOrFail(Crypt::decrypt($id));
    }

    public function CreateImage($id) {
        return view('administrator.galeri.detail.create', [
            'galeri' => Galeri::findOrFail(Crypt::decrypt($id))
        ]);
    }

    public function StoreImage(Request $request, $id) {
        if($request->hasfile('gambar')) {
            foreach($request->file('gambar') as $image) {
                $galeri = new GaleriDetail();
                $galeri->galeri_id = Crypt::decrypt($id);
                $file = $image->store('galeri', 'public');
                $galeri->gambar = $file;
                $galeri->save();
            }
            return redirect()->route('manage-galeri.show', [$id])->with('status', 'Gallery successfully added...');
        }
    }

    public function DestroyImage($id) {
        $galeri = GaleriDetail::findOrFail(Crypt::decrypt($id));
        $galeri_id = $galeri->galeri_id;
        unlink(storage_path('app/public/' . $galeri->gambar));
        $galeri->delete();
        return redirect()->route('manage-galeri.show', [Crypt::encrypt($galeri_id)])->with('status', 'Gallery successfully removed...');
        // return $galeri;
    }
}
