@extends('layouts.admin')
@section('title')
    Manage Strategi
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Manage Strategi</h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('manage-strategi.create') }}" class="btn btn-primary">Tambah</a>
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
                                @foreach ($strategi as $item)
                                    <tr>
                                        <td>
                                            <h4>{{ $item->title }}</h4>
                                            <p>{!! $item->konten !!}</p>
                                        </td>
                                        <td>
                                            <a href="{{ route('manage-strategi.edit', [Crypt::encrypt($item->id)]) }}" class="btn btn-primary btn-sm col-12">Edit</a>
                                            <form action="{{ route('manage-strategi.destroy', [Crypt::encrypt($item->id)]) }}" method="post" onclick="return confirm('Yakin ingin menghapus data tersebut?')">
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
