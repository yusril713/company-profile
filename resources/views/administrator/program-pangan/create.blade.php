@extends('layouts.admin')
@section('title')
    Tambah Program Pangan
@endsection
@section('content')
<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Tambah Program Pangan</h4>
                    </div>
                    <form action="{{ route('manage-pangan.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" id="" class="form-control" placeholder="Masukkan title program pangan...">
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" name="gambar" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi (Opsional)</label>
                            <textarea name="deskripsi" id="" class="form-control" placeholder="Masukkan deskripsi...."></textarea>
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
