@extends('layouts/master')

@section('title', 'Halaman KRS')

@section('content')
<form action="/krs/edit" method="POST" role="form">
{{ csrf_field()}}
    <legend>Update Data KRS</legend>

    <input type="hidden" name="id" value="<?= $krs['id']; ?>">


    <div class="form-group">
        <label for="no_frs">No FRS</label>
        <input type="text" name="no_frs" id="no_frs" class="form-control" title="no_frs" value="{{$krs->no_frs}}">
    </div>

    


    Data Sebelumnya :   @foreach ($matkulPrev as $key => $prev)
                            <span class="label label-default">{{$prev}}</span>
                        @endforeach


                        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Pilih</th>
                    <th>Nama Matakuliah</th>
                </tr>
            </thead>
                @foreach ($matakuliah as $key => $matkul)
                    <tr>
                        {{-- <td><input type="checkbox" name="matkul[]" value="<?= $matkul->nama_matkul; ?>" title="<?= $matkul->sks; ?>"></td>
                        <td>{{$matkul->nama_matkul}}</td> --}}
                        <td><input type="checkbox" name="matkul[]" value="{{$matkul->kode_matkul}} {{$matkul->nama_matkul}}"></td>
                        <td>{{$matkul->kode_matkul}}</td>
                    </tr>
                @endforeach
            <tbody>
            </tbody>
        </table>

    <div class="form-group">
        <label for="tahun_akademik">Tahun Akademik</label>
        <input type="text" name="tahun_akademik" id="tahun_akademik" class="form-control" title="tahun_akademik" value="{{$krs->tahun_akademik}}">
    </div>


    <br>

    <button type="submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>
@endsection

