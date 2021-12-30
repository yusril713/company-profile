@extends('layouts.admin')
@section('title')
    Manage Program Pangan
@endsection
@section('content')
<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Manage Program Pangan</h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('manage-pangan.create') }}" class="btn btn-primary">Tambah</a>
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
                                <th>Title</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($pangan as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td><img src="{{asset('storage/'. $item->gambar)}}" alt="" class="img-fluid" width="200"></td>
                                    <td>
                                        <a href="{{ route('manage-pangan.edit', [Crypt::encrypt($item->id)]) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('manage-pangan.destroy', [Crypt::encrypt($item->id)]) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data tersebut?')">
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
