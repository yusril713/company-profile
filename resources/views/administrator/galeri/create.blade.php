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
                    <form action="{{ route('manage-galeri.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Masukkan title galeri...">
                        </div>
                        <div class="form-group">
                            <label for="">Tipe</label>
                            <select name="tipe" id="tipe" class="form-control" >
                                <option value="">Pilih Tipe</option>
                                <option value="Gambar">Gambar</option>
                                <option value="Video">Video</option>
                            </select>
                        </div>
                        <div class="form-group" id="tipe_input"></div>
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
            var val = $(this).val();
            var tag = '';
            if(val == 'Gambar') {
                tag += '<label>Gambar</label>';
                tag += '<input type="file" class="form-control" name="gambar">';
                $('#tipe_input').html(tag);
            } else if(val == 'Video') {
                tag += '<label>Video</label>';
                tag += '<input type="text" class="form-control" name="link" placeholder="Masukkan link youtube video...">';
                $('#tipe_input').html(tag);
            }
        })
    })
</script>
@endsection
