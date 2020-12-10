@extends('layouts/master')

@section('title', 'Halaman Mata Kuliah')

@section('content')
<form action="/matkul/create" method="POST" role="form">
{{ csrf_field()}}
    <legend>Tambah Data Matakuliah</legend>

    <div class="form-group">
        <label for="kode_matkul">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" placeholder="Isikan Kode Mata Kuliah">
    </div>

    <div class="form-group">
        <label for="nama_matkul">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" placeholder="Isikan Nama Mata Kuliah">
    </div>      

    <br>

    <button type="submit" class="btn btn-primary">Tambah</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>
@endsection
