<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request) {
        $c = new ContactUs();
        $c->nama = $request->nama;
        $c->email = $request->email;
        $c->subjek = $request->subjek;
        $c->pesan = $request->pesan;
        $c->save();
        return 'Your message has been sent. Thank you!';
    }
}
