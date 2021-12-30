<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\ProdukDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('administrator.produk.index',[
            'produk' => Produk::all()
        ]);
    }

    public function create(){
        return view('administrator.produk.create');
    }

    public function store(Request $request) {
        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->slug = $request->slug;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->save();
        return redirect()->route('manage-produk.index')->with('status', 'Data succesfully created...');
    }

    public function edit($id) {
        return view('administrator.produk.edit',[
            'produk' => Produk::findOrFail(Crypt::decrypt($id))
        ]);
    }

    public function update(Request $request, $id) {
        $produk = Produk::findOrFail(Crypt::decrypt($id));
        $produk->nama_produk = $request->nama_produk;
        $produk->slug = $request->slug;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->save();
        return redirect()->route('manage-produk.index')->with('status', 'Data succesfully changed...');
    }

    public function show($id) {
        return view('administrator.produk.show', [
            'produk' => Produk::with('detail')->where('id', Crypt::decrypt($id))->first()
        ]);
    }

    public function AddImage($id) {
        return view('administrator.produk.add-image', [
            'produk' => Produk::findOrFail(Crypt::decrypt($id))
        ]);
    }

    public function StoreImage(Request $request, $id) {
        $produk = new ProdukDetail();
        $produk->produk_id = Crypt::decrypt($id);
        $file="";
        if($request->hasfile('gambar')) {
            $file = $request->file('gambar')->store('produk/'. Crypt::decrypt($id) . '/', 'public');
            $produk->gambar = $file;
        }
        $produk->save();
        return redirect()->route('manage-produk.show', [$id]);
    }

    public function DestroyImage($id) {
        $produk = ProdukDetail::findOrFail(Crypt::decrypt($id));
        if(file_exists(storage_path('app/public/' . $produk->gambar)))
            unlink(storage_path('app/public/' . $produk->gambar));
        $produk->delete();
        return redirect()->route('manage-produk.show', [Crypt::encrypt($produk->produk_id)]);
    }

    public function destroy($id) {
        $produk = Produk::findOrFail(Crypt::decrypt($id));
        $detail = ProdukDetail::where('produk_id', Crypt::decrypt($id));
        foreach($detail as $item) {
            if(file_exists(storage_path('app/public/' . $item->gambar)))
                unlink(storage_path('app/public/' . $item->gambar));
        }
        $produk->delete();
        return redirect()->route('manage-produk.index')->with('status', 'Data succesfully removed...');
    }
}
