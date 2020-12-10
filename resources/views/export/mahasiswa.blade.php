<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Tanggal Lahir</th>
            <th>Tahun Masuk</th>
            
        </tr>
    </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach($mhs as $m)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{$m->nim}}</td>
            <td>{{$m->nama}}</td>
            <td>{{$m->gender}}</td>
            <td>{{$m->tgl_lahir}}</td>
            <td>{{$m->tahun_masuk}}</td>
        </tr>
    @endforeach
    </tbody>
</table>