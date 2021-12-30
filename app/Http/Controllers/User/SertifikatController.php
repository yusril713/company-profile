<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Sertifikat;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index($id) {
        return view('user.certificate.index', [
            'sertifikat' => Sertifikat::findOrFail($id)
        ]);
    }
}
