@extends('layouts.global')
@section('title')
Photos
@endsection
@section('content')
<section id="portfolio" class="portfolio section-bg" style="padding-top: 130px">
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3 class="section-title">Gallery - Photos</h3>
      </header>
      <a href="#"><u>Gallery-Home</u></a>
      <hr>
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200" style="padding-top: 50px">
        @php
            $counter = 0;
        @endphp

        @foreach ($photo as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <img src="{{ asset('storage/' . $item->link) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <p>{{ $item->title }}</p>
                        <div>
                            <a href="{{ route('photos.detail', [Crypt::encrypt($item->id)]) }}"  class="link-preview"><i class="ion ion-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
</section>
@endsection
