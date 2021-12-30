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
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('manage-produk.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($produk as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->nama_produk }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ number_format($item->harga) }}</td>
                                    <td>
                                        <a href="{{ route('manage-produk.edit', [Crypt::encrypt($item->id)]) }}" class="btn btn-primary col-8">Edit</a>
                                        <a href="{{ route('manage-produk.show', [Crypt::encrypt($item->id)]) }}" class="btn btn-success col-8">Lihat</a>
                                        <form action="{{ route('manage-produk.destroy', [Crypt::encrypt($item->id)]) }}" method="POST"  onsubmit="return confirm('Are you sure want to remove this data?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger col-8">Hapus</button>
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
