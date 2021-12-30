@extends('layouts.admin')
@section('title')
    Manage Galeri
@endsection
@section('content')
<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>{{ $galeri->title }}</h4>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('manage-galeri.create-image', [Crypt::encrypt($galeri->id)]) }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($galeri->detail as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" width="200">
                                        </td>
                                        <td>
                                            <form action="{{ route('manage-galeri.destroy-image', [Crypt::encrypt($item->id)]) }}" method="post" onsubmit="return confirm('Are you sure want to remove this image?')">
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
