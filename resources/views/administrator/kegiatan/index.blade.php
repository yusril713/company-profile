@extends('layouts.admin')
@include('layouts.html_cut')
@section('title')
    Manage Program InProSuLA
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Manage Program InProSuLA</h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('manage-kegiatan.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                @foreach ($kegiatan as $item)
                                    <tr>
                                        <td>
                                            <h4>{{ $item->title }}</h4>
                                            <a href="#"><span class="text-primary">Kategori: {{ $item->strategi->title }}</span></a>
                                            <p>{{ html_cut(strip_tags($item->konten),1000,'...') }}...</p>
                                            <a href="{{ asset('storage/' . $item->file) }}"><span class="text-primary">Full Doucument Text...</span></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('manage-kegiatan.edit', [Crypt::encrypt($item->id)]) }}" class="btn btn-primary btn-sm col-12">Edit</a>
                                            <form action="{{ route('manage-kegiatan.destroy', [Crypt::encrypt($item->id)]) }}" method="post" onclick="return confirm('Yakin ingin menghapus data tersebut?')">
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
