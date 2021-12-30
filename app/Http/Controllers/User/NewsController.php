<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function detail($slug) {
        return view('user.news.index', [
            'news' => News::where('slug', $slug)->first(),
            'latest' => News::orderBy('created_at', 'desc')->limit(5)->get()
        ]);
    }

    public function all() {
        return view('user.news.all', [
            'news' => News::where('jenis', 'news_inprosula')->orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    public function AllMedia() {
        return view('user.news.all', [
            'news' => News::where('jenis', 'media')->orderBy('created_at', 'desc')->paginate(5)
        ]);
    }
}
