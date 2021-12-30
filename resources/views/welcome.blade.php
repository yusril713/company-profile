@include('layouts.html_cut')
@extends('layouts.global')
@section('title')
    Home
@endsection
@section('carousel')
    @include('layouts.carousel')
@endsection

@section('content')
<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>

    <!-- ======= About Section ======= -->
    <section id="faq" class="faq">

        <div class="container" data-aos="fade-up">

            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h2>About Us</h2>
                </div>
            </div>
            <ul id="faq-list" data-aos="fade-up" data-aos-delay="100">
                @php
                    $i = 1;
                @endphp
                @foreach ($profil as $item)
                    <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq{{ $i }}">{{ $item->title }} <i class="ion-android-remove"></i></a>
                        <div id="faq{{ $i }}" class="collapse" data-parent="#faq-list">
                        <p>
                            {!! $item->konten !!}
                        </p>
                        </div>
                    </li>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </ul>
        </div>
    </section>

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h3>Our Product</h3>
          </header>

          <div class="row">
            @foreach ($produk as $item)
                @php
                    $pesan = "Nama: \r\nEmail:\r\nAlamat Lengkap: \r\n\r\nApakah produk " . $item->nama_produk . " dengan harga " . number_format($item->harga) . ' masih tersedia?';
                    $encode = urlencode(utf8_encode($pesan));
                @endphp
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img src="{{ $item->detail_cover ? asset('storage/'. $item->detail_cover->gambar) : '' }}" alt="No-image" class="img-fluid card-img-top embed-responsive-item">
                        </div>
                        <a href="{{ route('produk.detail', [$item->slug]) }}" class="text-justify">{{ $item->nama_produk }}</a>
                        <p class="text-justify">{{ $item->deskripsi }}</p>
                        <a href="javascript:void(0)" onclick="window.open('https://api.whatsapp.com/send?phone={{ Phone::whatsapp()->kode_negara }}{{ Phone::whatsapp()->nomor }}&text={{ $encode }}')" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            @endforeach

        </div>

        </div>
      </section><!-- End Services Section -->
     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h3>Main Activity</h3>
          </header>

          <div class="row">
            @foreach ($strategi as $item)
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="">{{ $item->title }}</a></h4>
                    {!! $item->konten !!}
                </div>
            </div>
            @endforeach

        </div>

        </div>
      </section><!-- End Services Section -->

    <section id="portofolio" class="portofolio">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3 class="section-title">News</h3>
            </header>
            <div class="row">
                @foreach ($news as $item)
                    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="{{ asset('storage/'. $item->img) }}" alt="" class="img-fluid card-img-top embed-responsive-item">
                            </div>
                            <a href="{{ route('news.detail', [$item->slug])}}" class="text-justify">{{ $item->title }}</a>
                            <p class="text-justify">{{html_cut(strip_tags($item->isi),100,'...')}}... <a href="{{ route('news.detail', [$item->slug])}}">Continue reading</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-12">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('news') }}">See all news...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h3 class="section-title">Gallery</h3>
          </header>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Images</li>
                <li data-filter=".filter-card">Videos</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @php
                $counter = 0;
            @endphp
            @foreach ($galeri as $item)
                @if ($counter == 0)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('storage/' . $item->link) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>{{ $item->title }}</p>
                                <div>
                                    <a href="{{ asset('storage/' . $item->link) }}" data-gall="portfolioGallery" title="{{ $item->title }}" class="link-preview venobox"><i class="ion ion-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('storage/' . $item->link) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>{{ $item->title }}</p>
                                <div>
                                    <a href="{{ asset('storage/' . $item->link) }}" class="link-preview venobox" data-gall="portfolioGallery" title="{{ $item->title }}"><i class="ion ion-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            @foreach ($video as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
                  <div class='embed-container'>
                    <iframe src='{{ $item->link }}' frameborder='0' allowfullscreen></iframe></div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section><!-- End Portfolio Section -->


@endsection
