@extends('layouts.admin')
@section('title')
    Tambah Produk
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Tambah Produk</h4>
                    </div>
                    <hr>
                    <form action="{{ route('manage-produk.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" name="nama_produk" id="" class="form-control" placeholder="Masukkan nama produk" required>
                        </div>
                        <div class="form-group">
                            <label for="">URL</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">{{ url('/product') }}/</span>
                                </div>
                                <input type="text" name="slug" class="form-control form-control @error('slug') is-invalid @enderror" aria-describedby="basic-addon3" value="{{ old('slug') }}">
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" id="" class="form-control" placeholder="Masukkan harga produk">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" class="form-control" placeholder="Masukkan deskripsi produk"></textarea>
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
