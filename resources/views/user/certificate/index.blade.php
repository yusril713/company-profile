@extends('layouts.global')
@section('title')
{{ $sertifikat->title }}
@endsection
@section('content')
<div class="container" style="padding-top: 130px">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="d-flex justify-content-center">
                <h4>{{ $sertifikat->title }}</h4>
            </div>
            <hr>
            @if ($sertifikat->tipe === "Gambar")
            <div class="d-flex justify-content-center">
                <img src="{{ asset('storage/' . $sertifikat->kontent) }}" alt="" class="img-fluid">
            </div>
            @else
            <div class="d-flex justify-content-center">
                <iframe src="{{ asset('storage/' . $sertifikat->kontent) }}" width="80%" height="600">
                    This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('folder/file_name.pdf') }}">Download PDF</a>
                </iframe>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
