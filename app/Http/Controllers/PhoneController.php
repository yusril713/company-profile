<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PhoneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('administrator.wa.index', [
            'wa' => Phone::all()
        ]);
        // $str = $this->url_encode("If you view the page source \r\n you will find a newline in this string.");
        // echo $str;
    }

    public function edit($id) {
        return view('administrator.wa.edit', [
            'wa' => Phone::findOrFail(Crypt::decrypt($id))
        ]);
    }

    public function update(Request $request, $id) {
        $wa = Phone::findOrFail(Crypt::decrypt($id));
        $wa->nomor = $request->nomor;
        $wa->save();
        return redirect()->route('manage-wa.index')->with('status', 'Data successfully changed...');
    }

    function url_encode($string){
        return urlencode(utf8_encode($string));
    }
}
