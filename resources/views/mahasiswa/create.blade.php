@extends('layouts/master')

@section('title', 'Halaman Mahasiswa')

@section('content')

@if(Session::has('alert danger'))
    <div class="form-group alert alert-danger">
        <div>{{Session::get('alert danger')}}</div>
    </div>
@endif
@if(Session::has('alert success'))
    <div class="form-group alert alert-success">
            <div>{{Session::get('alert success')}}</div>
    </div>
@endif
{{-- menampilkan error validasi --}}
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/mahasiswa/create" method="POST" role="form" enctype="multipart/form-data">
{{ csrf_field()}}
    <legend>Tambah Dat Mahasiswa</legend>
    
    <div class="form-group">
        <label for="nim">Nim</label>
        <input type="text" class="form-control" id="nim" name="nim" placeholder="Isikan NIM" >
        <small class="block text-danger"></small>
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama">
        <small class="block text-danger"></small>
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control" required="required">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <small class="block text-danger"></small>
    </div>

    <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="" name="tgl_lahir" placeholder="Isikan Tanggal Lahir">
        <small class="block text-danger"></small>
    </div>
    {{-- <div class="row form-group">
        <div class="col col-md-3">
            <label for="text-input" class=" form-control-label">Tanggal Lahir</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" class="form-control" value="" required readonly>
        </div>
    </div> --}}

    <div class="form-group">
        <label for="tahun_masuk">Tahun Masuk</label>
        <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" placeholder="Isikan Tahun Masuk">
        <small class="block text-danger"></small>
    </div>

    <div class="form-group">
        <label for="avatar">Upload Foto</label>
        <input type="file" class="form-control" id="avatar" name="avatar" placeholder="Isikan Tahun Masuk">
        <small class="block text-danger"></small>
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Tambah</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script>
    $('#tgl_lahir').datepicker({
        format: 'dd mmm yyyy',
        uiLibrary: 'bootstrap4'
    });
</script>


@endsection
