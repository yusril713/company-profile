<?php

namespace App\Http\Controllers;

use App\Models\Strategi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class StrategiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('administrator.strategi.index', [
            'strategi' => Strategi::all()
        ]);
    }

    public function create() {
        return view('administrator.strategi.create');
    }

    public function store(Request $request) {
        $s = new Strategi();
        $s->title = $request->title;
        $s->slug = $request->slug;
        $s->konten = $request->konten;
        $s->save();
        return redirect()->route('manage-strategi.index')->with('status', 'Data successfully created...');
    }

    public function edit($id) {
        return view('administrator.strategi.edit', [
            'strategi' => Strategi::findOrFail(Crypt::decrypt($id))
        ]);
    }

    public function update(Request $request, $id) {
        $s = Strategi::findOrFail(Crypt::decrypt($id));
        $s->title = $request->title;
        $s->slug = $request->slug;
        $s->konten = $request->konten;
        $s->save();
        return redirect()->route('manage-strategi.index')->with('status', 'Data successfully changed...');
    }

    public function destroy($id) {
        Strategi::findOrFail(Crypt::decrypt($id))->delete();
        return redirect()->route('manage-strategi.index')->with('status', 'Data successfully removed...');
    }
}
