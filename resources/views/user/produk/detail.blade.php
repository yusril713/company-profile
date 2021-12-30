@include('layouts.html_cut')
@extends('layouts.global')
@section('title')
    {{ $produk->nama_produk }}
@endsection
@section('content')
<link href="{{asset('users/css/magnific-popup.css')}}" rel="stylesheet">
<div class="container" style="padding-top: 120px">
    <div class="row">

        <!-- gallery and tabs column -->
        <div class="col-lg-6">
            <div class="zoom-gallery">
            <div class="slider slider-single">
                    @foreach ($produk->image as $item)
                        <li class="list-item">
                            <a href="{{ asset('storage/' . $item->gambar) }}"><img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" data-s width="400"></a>
                        </li>
                    @endforeach
                </div>
            </div>
            <hr>
            <div class="slider slider-nav">
                @foreach ($produk->image as $item)
                    <li class="list-item" style="margin-right: 10px">
                        <a href="{{ asset('storage/' . $item->gambar) }}"><img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" data-s></a>
                    </li>
                @endforeach
            </div>
        </div>
        <div class="col-lg-6">
            <div class="d-flex justify-content-start">
                <h4><a href="#">{{ $produk->nama_produk }}</a></h4>
            </div>
            <div class="d-flex justify-content-start">
                <h4><a href="#">Rp. {{ number_format($produk->harga) }}</a></h4>
            </div>
            <hr>
            <div class="d-flex justify-content-start">
                <h4><a href="#">Deskrpisi Produk:</a></h4>
            </div>
            <hr>
            <p>{!! $produk->deskripsi !!}</p>
            <div class="d-flex justify-content-end">
                @php
                    $pesan = "Nama: \r\nEmail: \r\nAlamat Lengkap: \r\n\r\nApakah produk " . $produk->nama_produk . " dengan harga " . number_format($produk->harga) . ' masih tersedia?';
                    $encode = urlencode(utf8_encode($pesan));
                @endphp
                <a href="javascript:void(0)" onclick="window.open('https://api.whatsapp.com/send?phone={{ Phone::whatsapp()->kode_negara }}{{ Phone::whatsapp()->nomor }}&text={{ $encode }}')" class="btn btn-primary">Pesan Sekarang</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('users/js/jquery.magnific-popup.min.js')}}"></script>
<script>
    $('.slider-single').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });

 $('.slider-nav')
 	.on('init', function(event, slick) {
 		$('.slider-nav .slick-slide.slick-current').addClass('is-active');
 	})
 	.slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true
 	});

 $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
 	$('.slider-nav').slick('slickGoTo', currentSlide);
 	var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
 	$('.slider-nav .slick-slide.is-active').removeClass('is-active');
 	$(currrentNavSlideElem).addClass('is-active');
 });

 $('.slider-nav').on('click', '.slick-slide', function(event) {
 	event.preventDefault();
 	var goToSingleSlide = $(this).data('slick-index');

 	$('.slider-single').slick('slickGoTo', goToSingleSlide);
 });

 $(document).ready(function() {
    $('.zoom-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {

                }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }

    });
 });
</script>
@endsection
