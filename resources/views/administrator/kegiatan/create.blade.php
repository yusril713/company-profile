@extends('layouts.admin')
@section('title')
Tambah Aktivitas
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Tambah Aktivitas</h4>
                    </div>
                    <hr>
                    <form action="{{ route('manage-kegiatan.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Lingkup Program</label>
                            <select name="lingkup_program" id="" class="form-control @error('lingkup_program') is-invalid @enderror">
                                <option value="">Pilih lingkup Program</option>
                                @foreach (Strategi::get() as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                            @error('lingkup_program')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Masukkan title..." value="{{ old('title') }}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Url <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">{{ url('/program') }}/</span>
                                </div>
                                <input type="text" name="slug" class="form-control form-control @error('slug') is-invalid @enderror" aria-describedby="basic-addon3" value="{{ old('slug') }}">
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar <span class="text-danger">*</span></label>
                            <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror" value="{{ old('gambat') }}">
                            @error('gambar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Konten <span class="text-danger">*</span></label>
                            <textarea name="konten" id="konten" class="@error('konten') is-invalid @enderror" cols="30" rows="10"></textarea>
                            @error('konten')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">File <span class="text-danger">*</span></label>
                            <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" type="file" id="" value="{{ old('file') }}">
                            @error('file')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
