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
      <a href="{{ route('photos') }}">Gallery-Home</a> <<
      <a href=""><u>{{ $photo->title }}</u></a>
      <hr>
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200" style="padding-top: 50px">
        @php
            $counter = 0;
        @endphp
         <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
                <img src="{{ asset('storage/' . $photo->link) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <p>{{ $photo->title }}</p>
                    <div>
                        <a href="{{ asset('storage/' . $photo->link) }}" data-gall="portfolioGallery" title="{{ $photo->title }}" class="link-preview venobox"><i class="ion ion-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($photo->detail as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <p>{{ $photo->title }}</p>
                        <div>
                            <a href="{{ asset('storage/' . $item->gambar) }}" data-gall="portfolioGallery" title="{{ $photo->title }}" class="link-preview venobox"><i class="ion ion-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
</section>
@endsection
