@include('layouts.html_cut')
@extends('layouts.global')
@section('title')
    Program
@endsection
@section('content')
<div class="container" style="padding-top: 120px">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                @foreach ($kegiatan as $item)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <a href="{{ route('program.detail', [$slug, $item->slug])}}">{{ $item->title }}</a><br>
                        <a href="#">{{ $item->created_at }}</a>
                        <p class="text-justify">{{html_cut(strip_tags($item->konten),400,'...')}}... <a href="{{ route('program.detail', [$slug, $item->slug])}}"> Continue reading.</a></p>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        {{ $kegiatan->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
