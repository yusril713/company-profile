@extends('layouts.admin')
@section('title')
    Manage Produk
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Manage Produk</h4>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Nama Produk</td>
                                        <td>{{ $produk->nama_produk }}</td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>{{ number_format($produk->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>{{ $produk->deskripsi }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('manage-produk.store-image', [Crypt::encrypt($produk->id)]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukkan Gambar</label>
                            <input type="file" name="gambar" id="" class="form-control">
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
