@extends('layouts/master')

@section('title', 'Halaman KRS')

@section('content')

<form action="/krs/create" method="POST" role="form">
{{ csrf_field()}}
    <legend>Pengisian KRS</legend>

    <div class="form-group">
        <label for="no_frs">No FRS</label>
        <input type="text" name="no_frs" id="no_frs" class="form-control" title="no_frs">
    </div>

    <div class="form-group">
        <label for="nim">NIM Mahasiswa</label>
        <select name="nim" id="input" class="form-control" required="required">
        @foreach ($mahasiswa as $key => $mhs)
            <option value="<?= $mhs->nim; ?>">(<?= $mhs->nim ?>) <?= $mhs->nim; ?></option>
        @endforeach
        </select>
    </div>

    <small class="block text-danger"></small>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Pilih</th>
                    <th>Kode Mata Kuliah</th>
                </tr>
            </thead>
                @foreach ($matakuliah as $key => $matkul)
                    <tr>
                      
                        <td><input type="checkbox" name="matkul[]" value="{{$matkul->kode_matkul}} {{$matkul->nama_matkul}}"></td>
                        <td>{{$matkul->kode_matkul}}</td>
                    </tr>
                @endforeach
            <tbody>
            </tbody>
        </table>

    


    <div class="form-group">
        <label for="tahun_akademik">Tahun Akademik</label>
        <input type="text" name="tahun_akademik" id="tahun_akademik" class="form-control" title="tahun_akademik">
    </div>


    <br>

    <button type="submit" class="btn btn-primary">Tambah</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>
@endsection
