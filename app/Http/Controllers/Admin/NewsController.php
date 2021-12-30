<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class NewsController extends Controller
{
    protected $jenis = 'news_inprosula';
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('administrator.news.index', [
            'news' => News::where('jenis', $this->jenis)->orderBy('updated_at', 'desc')->paginate(5)
        ]);
        // return News::all();
    }

    public function create() {
        return view('administrator.news.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'slug' => ['required', 'unique:tb_news'],
            'isi' => ['required', 'min:10'],
            'img' => ['required'],
            'tanggal' => ['required'],
            'penulis',
            'sumber',
        ]);

        $news = new News();
        $news->user_id = Auth::user()->id;
        $news->jenis = $this->jenis;
        $news->title = $request->title;
        $news->slug = $request->slug;
        $news->creator = $request->creator;
        $news->isi = $request->isi;
        $news->tanggal = $request->tanggal;
        $news->sumber = $request->sumber;
        $file="";
        if($request->hasfile('img')) {
            $file = $request->file('img')->store('news', 'public');
            $news->img = $file;
        }
        $news->save();
        return redirect()->route('manage-news.index')->with('status', 'News successfully created...');
    }

    public function edit($id) {
        return view('administrator.news.edit', [
            'news' => News::findOrFail(Crypt::decrypt($id))
        ]);
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'slug' => ['required'],
            'isi' => ['required', 'min:10'],
            'tanggal' => ['required'],
        ]);

        $news = News::findOrFail(Crypt::decrypt($id));
        $news->user_id = Auth::user()->id;
        $news->jenis = $this->jenis;
        $news->title = $request->title;
        $news->slug = $request->slug;
        $news->creator = $request->creator;
        $news->isi = $request->isi;
        $news->tanggal = $request->tanggal;
        $news->sumber = $request->sumber;
        $file="";
        if($request->hasfile('img')) {
            unlink(storage_path('app/public/' . $news->img));
            $file = $request->file('img')->store('news', 'public');
            $news->img = $file;
        }
        $news->save();
        return redirect()->route('manage-news.index')->with('status', 'News successfully updated...');
    }

    public function destroy($id) {
        $news = News::findOrFail(Crypt::decrypt($id));
        unlink(storage_path('app/public/' . $news->img));
        $news->delete();
        return redirect()->route('manage-news.index')->with('status', 'Data successfully removed...');
    }
}
