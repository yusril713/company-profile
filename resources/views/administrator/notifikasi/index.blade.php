@extends('layouts.admin')
@include('layouts.html_cut')
@section('title')
    Request File
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Request File</h4>
                    </div>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>File Request</th>
                                <th>No Telp</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($notif as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->kegiatan->title }}</td>
                                        <td>{{ $item->no_telp }}</td>
                                        <td>
                                            @if ($item->status == 'Dikirim')
                                                <span class="badge badge-success">Dikirm</span>
                                            @else
                                                <span class="badge badge-danger">Belum Dikirim</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == 'Dikirim')
                                                <form action="{{ route('manage-request-file.send') }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="kegiatan_id" value="{{ $item->kegiatan->id }}">
                                                    <input type="hidden" name="request_id" value="{{ $item->id }}">
                                                    <button class="btn btn-link-primary text-primary">Kirim Lagi</button>
                                                </form>
                                            @else
                                                <form action="{{ route('manage-request-file.send') }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="kegiatan_id" value="{{ $item->kegiatan->id }}">
                                                    <input type="hidden" name="request_id" value="{{ $item->id }}">
                                                    <button class="btn btn-link-primary text-primary">Kirim</button>
                                                </form>
                                            @endif
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
