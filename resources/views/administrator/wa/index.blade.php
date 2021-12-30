@extends('layouts.admin')
@section('title')
    Manage Whatsapp
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Manage Whatsapp</h4>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>Kode Negara</th>
                                <th>Nomor</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($wa as $item)
                                    <tr>
                                        <td>+{{ $item->kode_negara }}</td>
                                        <td>{{ $item->nomor }}</td>
                                        <td><a href="{{ route('manage-wa.edit', [Crypt::encrypt($item->id)]) }}" class="btn btn-primary">Edit</a></td>
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
