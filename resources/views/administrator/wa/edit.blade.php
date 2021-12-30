@extends('layouts.admin')
@section('title')
    Edit Whatsapp
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Edit Whatsapp</h4>
                    </div>
                    <form action="{{ route('manage-wa.update', [Crypt::encrypt($wa->id)]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="basic-url">Nomor Whatsapp</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">+62</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" name="nomor" aria-describedby="basic-addon3" value="{{ $wa->nomor }}">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
