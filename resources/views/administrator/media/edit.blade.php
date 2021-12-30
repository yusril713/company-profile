@extends('layouts.admin')
@section('title')
Edit Media
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Edit Media</h4>
                    </div>
                    <hr>

                    <form action="{{ route('manage-media.update', [Crypt::encrypt($news->id)]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="title" id="" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan judul news..." value="{{ $news->title }}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">URL</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">{{ url('/media') }}/</span>
                                </div>
                                <input type="text" name="slug" class="form-control form-control @error('slug') is-invalid @enderror" aria-describedby="basic-addon3" value="{{ $news->slug }}">
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Penulis (Opsional)</label>
                            <input type="text" class="form-control" name="creator" placeholder="Masukkan nama penulis" value="{{ $news->creator }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" id="" class="form-control @error('tanggal') is-invalid @enderror" value="{{ $news->tanggal }}">
                            @error('tanggal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Isi</label>
                            <textarea name="isi" id="konten" cols="30" rows="20" class="form-control @error('isi') is-invalid  @enderror">{{ $news->isi }}</textarea>
                            @error('isi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Sumber</label>
                            <input type="text" name="sumber" id="" class="form-control" value="{{ $news->sumber }}">
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label><br>
                            <img src="{{ asset('storage/' . $news->img) }}" alt="" width="200">
                            <input type="file" name="img" id="" class="form-control">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
