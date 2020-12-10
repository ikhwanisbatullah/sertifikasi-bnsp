@extends('layouts/master')

@section('title', 'Halaman Mata Kuliah')

@section('content')
<form action="/matkul/edit" method="POST" role="form">
{{ csrf_field()}}
    <legend>Update Data matakuliah</legend>

    <input type="hidden" name="id" value="{{$matakuliah->id}}">

    <div class="form-group">
        <label for="kode_matkul">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" placeholder="Isikan Kode Mata Kuliah" value="{{$matakuliah->kode_matkul}}">
    </div> 

    <div class="form-group">
        <label for="nama_matkul">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" placeholder="Isikan Nama Mata Kuliah" value="{{$matakuliah->nama_matkul}}">
    </div> 
    <br>

    <button type="submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>
@endsection
