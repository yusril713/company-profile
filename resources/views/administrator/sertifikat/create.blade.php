@extends('layouts.admin')
@section('title')
    Tambah Dokumen
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Tambah Dokumen</h4>
                    </div>
                    <form action="{{ route('manage-sertifikat.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Masukkan title sertifikat...">
                        </div>
                        <div class="form-group">
                            <label for="">Tipe</label>
                            <select name="tipe" id="tipe" class="form-control">
                                <option value="">Pilih Tipe</option>
                                @foreach ($tipe as $item)
                                    <option value="{{$item}}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Dokomen</label>
                            <input type="file" name="kontent" class="form-control">
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
