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
                    <hr>
                    <form action="{{ route('manage-strategi.update', [Crypt::encrypt($strategi->id)]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Masukkan title..." value="{{ $strategi->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Url <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">{{ url('/lingkup-program') }}/</span>
                                </div>
                                <input type="text" name="slug" class="form-control form-control @error('slug') is-invalid @enderror" aria-describedby="basic-addon3" value="{{ $strategi->slug }}">
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <textarea id="konten" class="form-control" name="konten" rows="10" cols="50">{{ $strategi->konten }}</textarea>
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
