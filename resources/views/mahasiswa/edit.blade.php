@extends('layouts/master')

@section('title', 'Halaman Mahasiswa')

@section('content')
<form action="/mahasiswa/edit" method="POST" role="form">
{{ csrf_field()}}
    <legend>Update Data Mahasiswa</legend>

    <input type="hidden" name="id" value="{{$mahasiswa->id}}">

    <div class="form-group">
        <label for="nim">Nim</label>
        <input type="text" class="form-control" id="nim" name="nim" placeholder="Isikan NIM" value="{{$mahasiswa->nim}}">
        <small class="block text-danger"></small>
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama" value="{{$mahasiswa->nama}}">
        <small class="block text-danger"></small>
    </div>

    <div class="form-group ">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control" required="required">
            <option value="Laki-laki" {{$mahasiswa->gender == 'Laki-laki' ? 'selected' : ''}} >Laki-laki</option>
            <option value="Perempuan" {{$mahasiswa->gender == 'Perempuan' ? 'selected' : ''}} >Perempuan</option>
        </select>
        <small class="block text-danger"></small>
    </div>

    <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="" name="tgl_lahir" placeholder="Tanggal Lahir" value="{{$mahasiswa->tgl_lahir}}">
        <small class="block text-danger"></small>
    </div>

    <div class="form-group">
        <label for="tahun_masuk">Tahun Masuk</label>
        <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" placeholder="Tanggal Lahir" value="{{$mahasiswa->tahun_masuk}}">
        <small class="block text-danger"></small>
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>
@endsection
