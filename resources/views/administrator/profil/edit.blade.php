@extends('layouts.admin')
@section('title')
Manage Profil
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Manage Profil</h4>
                    </div>
                    <hr>
                    <form action="{{ route('manage-profil.update', [Crypt::encrypt($profil->id)]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Masukkan title..." value="{{ $profil->title }}">
                        </div>
                        <div class="form-group">
                            <textarea id="konten" class="form-control" name="konten" rows="10" cols="50">{{ $profil->konten }}</textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
