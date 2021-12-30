@extends('layouts.admin')
@section('title')
    Tambah Galeri
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Tambah Data</h4>
                    </div>
                    <h4>{{ $galeri->title }}</h4>
                    <hr>
                    <form action="{{ route('manage-galeri.store-image', [Crypt::encrypt($galeri->id)]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" class="form-control" name="gambar[]" multiple="multiplem">
                        </div>
                        <div class="form-group" id="tipe_input"></div>
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
