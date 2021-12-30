<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendFullDocument;
use App\Models\Kegiatan;
use App\Models\RequestFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotifikasiController extends Controller
{
    public function index() {
        return view('administrator.notifikasi.index', [
            'notif' => RequestFile::with('kegiatan')->orderByRaw("FIELD(status, 'Belum Dikirim')desc")->get()
        ]);
        //  return RequestFile::orderByRaw("FIELD(status, 'Belum Dikirim', 'Dikirim')desc")->get();
    }

    public function send(Request $request) {
        $req = RequestFile::findOrFail($request->request_id);
        $req->status = 'DIKIRIM';
        $req->save();
        $kegiatan = Kegiatan::findOrFail($request->kegiatan_id);
        Mail::to($req->alamat)->queue(new SendFullDocument($kegiatan));
        return redirect()->route('manage-request-file.index')->with('status', 'Document has been sent to ' . $req->alamat);
    }
}
