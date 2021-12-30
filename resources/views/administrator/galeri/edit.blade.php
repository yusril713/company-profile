@extends('layouts.admin')
@section('title')
    Tambah Galeri
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-body">
                    <div class="d-flex justify-content-center">
                        <h4>Tambah Galeri</h4>
                    </div>
                    <form action="{{ route('manage-galeri.update', [Crypt::encrypt($galeri->id)]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Masukkan title sertifikat..." value="title">
                        </div>
                        <div class="form-group">
                            <label for="">Tipe</label>
                            <select name="tipe" id="tipe" class="form-control" required>
                                <option value="">Pilih Tipe</option>
                                <option value="Gambar" {{ ($galeri->tipe == 'Gambar') ? 'selected' : '' }}>Gambar</option>
                                <option value="Video" {{ ($galeri->tipe == 'Video') ? 'selected' : '' }}>Video</option>
                            </select>
                        </div>
                        <div class="form-group" id="tipe_input">

                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $('#tipe').on('change', function() {
            var link = "{{ $galeri->link }}";
            var val = $(this).val();
            var tag = '';
            if(val == 'Gambar') {
                tag += '<label>Gambar</label>';
                tag += '<input type="file" class="form-control" name="gambar">';
                $('#tipe_input').html(tag);
            } else if(val == 'Video') {
                tag += '<label>Video</label>';
                tag += '<input type="text" class="form-control" name="link" placeholder="Masukkan link youtube video..." value="' + link + '">';
                $('#tipe_input').html(tag);
            }
        })
    })
</script>
@endsection
