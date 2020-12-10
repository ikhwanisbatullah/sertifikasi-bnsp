@extends('layouts/master')

@section('title', 'Halaman KRS')

@section('content')
<a href="/krs/create" class="btn btn-default pull-right">Pengisian KRS</a>

<br><br><br>

<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>No FRS</th>
            <th>NIM</th>
            <th>Kode Matkul</th>
            <th>Tahun  Akadmik</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($krs as $key => $item_krs)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$item_krs->no_frs}}</td>
                <td>{{$item_krs->nim}}</td>
                
                <td>
                    <?php $d = explode(',', $item_krs->matkul); ?>
                    <?php foreach ($d as $e): ?>
                        <span class="label label-default"><?= $e ?></span>
                    <?php endforeach ?>
                </td>
                <td>{{$item_krs->tahun_akademik}}</td>
                <td>
                    <a href="/krs/edit/{{$item_krs->id}}" class="btn btn-info btn-xs">Edit</a>
                <a href="/krs/exportpdf/{{$item_krs->id}}/{{$item_krs->nim}}" class="btn btn-info btn-xs">exportpdf</a>
                    <a href="/krs/delete/{{$item_krs->id}}" class="btn btn-danger btn-xs" onclick="return confirm('Apa anda yakin?')">Delete</a>
                </td>
                
            </tr>
        @endforeach        
    </tbody>
</table>
@endsection

