@extends('layouts.global')
@section('title')
Aktivitas yang Dijalankan
@endsection
@section('content')
    <div class="container" style="padding-top: 120px">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @foreach ($strategi as $item)
                    <a href="#"><h4>{{ $item->title }}</h4></a>
                    <hr>
                    <p>{!! $item->konten !!}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
