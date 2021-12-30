@extends('layouts.admin')
@section('title')
Tambah Media
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Tambah Media</h4>
                    </div>
                    <hr>
                    <form action="{{ route('manage-media.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Judul <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan judul news...">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Url <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">{{ url('/media') }}/</span>
                                </div>
                                <input type="text" name="slug" class="form-control form-control @error('slug') is-invalid @enderror" aria-describedby="basic-addon3" value="{{ old('slug') }}">
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="">Penulis (Opsional)</label>
                            <input type="text" class="form-control" name="creator" placeholder="Masukkan nama penulis" value="{{ old('creator') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal <span class="text-danger">*</span></label>
                            <input type="date" name="tanggal" id="" class="form-control @error('tanggal') is-invalid @enderror">
                            @error('tanggal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Gambar Utama <span class="text-danger">*</span></label>
                            <input type="file" name="img" id="" class="form-control @error('img') is-invalid @enderror">
                            @error('img')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Isi <span class="text-danger">*</span></label>
                            <textarea name="isi" id="konten" cols="30" rows="20" class="form-control @error('isi') is-invalid  @enderror"></textarea>
                            @error('isi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Sumber (Opsional)</label>
                            <input type="text" name="sumber" id="" class="form-control" value="{{ old('sumber') }}">
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
