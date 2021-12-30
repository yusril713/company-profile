@include('layouts.html_cut')
@extends('layouts.global')
@section('title')
    {{ $kegiatan->title }}
@endsection
@section('content')
<div class="container" style="padding-top: 120px">
    <div class="row">
        <div class="col-md-8">
            <img src="{{ asset('storage/' . $kegiatan->gambar) }}" alt="" class="img-fluid">
            <a href="#"><h4>{{$kegiatan->title}}</h4></a>
            {!! $kegiatan->konten !!}
            <button type="button" class="btn btn-link-primary text-primary" data-toggle="modal" data-target="#exampleModal">>>Request Full Document<<</button>
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
                        <a href="{{ route('program.detail', [$item->strategi->slug, $item->slug])}}">{{ $item->title }}</a><br>
                        <a href="#">{{ $item->created_at }}</a>
                        <p class="text-justify" style="margin-top: 0px !important">{{html_cut(strip_tags($item->konten),100,'...')}}...</p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Request Full Document</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="kegiatan_id" id="kegiatan_id" value="{{ $kegiatan->id }}">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan alamat email" required>
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">No Telp</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan no telp..." required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

      </div>
    </div>
  </div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#submit').on('click', function() {
            var dataString = {
                _token: "{{ csrf_token() }}",
                kegiatan_id: $('#kegiatan_id').val(),
                nama: $('#nama').val(),
                email: $('#email').val(),
                jenis_kelamin: $('#jenis_kelamin').val(),
                no_telp: $('#no_telp').val()
            };
            $.ajax({
                url: "{{ url('/activity/post-request-file') }}",
                type: "POST",
                data: dataString,
                success: function(data) {
                    alert(data);
                },
                error: function(xhr) {
                    alert("Lengkapi data terlebih dahulu")
                }
            });
        });
    });
</script>
@endsection
