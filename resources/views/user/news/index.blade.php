@include('layouts.html_cut')
@extends('layouts.global')
@section('title')
    {{ $news->title }}
@endsection
@section('content')
<div class="container" style="padding-top: 120px">
    <div class="row">
        <div class="col-md-8">
            <img src="{{ asset('storage/' . $news->img) }}" alt="" class="img-fluid">
            <a href="#"><h4>{{$news->title}}</h4></a>
            <p>{!! $news->isi !!}</p>
            <p>
                <b>Published: </b> {{ $news->created_at }} {{ $news->creator ? '-' . $news->creator : ''}} <br>
                <b>Sumber: </b> <a href="#">{{ $news->sumber }}</a>
            </p>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <a href="#">LATEST POST</a>
                    </div>
                </div>
                <div class="card-body">
                    @foreach ($latest as $item)
                        <a href="{{ route('news.detail', [$item->slug])}}">{{ $item->title }}</a><br>
                        <a href="#">{{ $item->created_at }} {{ $item->creator ? '-' . $item->creator : ''}}</a>
                        <p class="text-justify" style="margin-top: 0px !important">{{html_cut(strip_tags($item->isi),100,'...')}}...</p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
