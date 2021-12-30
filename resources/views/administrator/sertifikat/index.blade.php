@extends('layouts.admin')
@section('title')
    Dokumen Lainnya
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Dokumen Lainnya</h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('manage-sertifikat.create') }}" class="btn btn-primary">Tambah</a>
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
                                <th>Sertifikat</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($sertifikat as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            @if ($item->tipe == 'Dokumen')
                                                <a href="{{ asset('storage/' . $item->kontent) }}">{{ $item->title }}</a>
                                            @else
                                            <img src="{{ asset('storage/' . $item->kontent) }}" alt="" class="img-fluid" width="100">
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('manage-sertifikat.destroy', [Crypt::encrypt($item->id)]) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data tersebut')">
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
