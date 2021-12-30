@extends('layouts.admin')
@section('title')
    Manage News
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Manage News</h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('manage-news.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @foreach ($news as $item)
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $item->img) }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h4>{{ $item->title }} <a href="{{ route('manage-news.edit', [Crypt::encrypt($item->id)]) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('manage-news.destroy', [Crypt::encrypt($item->id)]) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data tersebut?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </h4>
                                {!! $item->isi !!}
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
