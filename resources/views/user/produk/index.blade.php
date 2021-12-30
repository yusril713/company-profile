@include('layouts.html_cut')
@extends('layouts.global')
@section('title')
    Our Product
@endsection
@section('content')
<div class="container" style="padding-top: 120px">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                @foreach ($produk as $item)
                    @php
                        $pesan = "Nama: \r\nEmail:\r\nAlamat Lengkap: \r\n\r\nApakah produk " . $item->nama_produk . " dengan harga " . number_format($item->harga) . ' masih tersedia?';
                        $encode = urlencode(utf8_encode($pesan));
                    @endphp
                    <div class="col-md-3">
                        <div class="embed-responsive embed-responsive-1by1">
                            <img src="{{ $item->detail_cover ? asset('storage/'. $item->detail_cover->gambar) : ''}}" alt="No-image" class="img-fluid card-img-top embed-responsive-item">
                        </div>
                        <table class="table-borderless" style="width: 100%">
                            <td style="width: 50%"><a href="{{ route('produk.detail', [$item->slug]) }}">{{ $item->nama_produk }}</a></td>
                            <td class="text-right" style="width: 50%"><a href="{{ route('produk.detail', [$item->slug]) }}">Rp. {{ number_format($item->harga) }}</a></td>
                        </table>
                        <p class="text-justify">{{ Str::substr($item->deskripsi, 0, 100) }}...</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0)" onclick="window.open('https://api.whatsapp.com/send?phone={{ Phone::whatsapp()->kode_negara }}{{ Phone::whatsapp()->nomor }}&text={{ $encode }}')" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
