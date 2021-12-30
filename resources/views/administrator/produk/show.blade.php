@extends('layouts.admin')
@section('title')
    Manage Produk
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
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
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('manage-produk.add-image', [Crypt::encrypt($produk->id)]) }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($produk->detail as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="" class="img-fluid" width="100"></td>
                                        <td>
                                            <form action="{{ route('manage-produk.destroy-image', [Crypt::encrypt($item->id)]) }}" method="post" onsubmit="return confirm('Are you sure want to remove this image?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
