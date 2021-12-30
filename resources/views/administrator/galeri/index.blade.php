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
                        <h4>Manage Galeri</h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('manage-galeri.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Title</th>
                                <th>Cover</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($galeri as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        @if ($item->tipe == 'Gambar')
                                            <img src="{{ asset('storage/' . $item->link) }}" class="img-fluid" width="200">
                                        @else
                                        <div class='embed-container'>
                                        <iframe src='{{ $item->link }}' frameborder='0' allowfullscreen></iframe></div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('manage-galeri.edit', [Crypt::encrypt($item->id)]) }}" class="btn btn-primary col-12">Edit</a>
                                        @if ($item->tipe == 'Gambar')

                                        <a href="{{ route('manage-galeri.show', [Crypt::encrypt($item->id)]) }}" class="btn btn-success col-12">Lihat</a>

                                        @endif
                                        <form action="{{ route('manage-galeri.destroy', [Crypt::encrypt($item->id)]) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data tersebut?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger col-12">Hapus</button>
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
