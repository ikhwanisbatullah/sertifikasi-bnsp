{{-- @foreach($mhs as $m)
	<p>{{$m->nim}}</p>
	<p>{{$m->nama}}</p>
@endforeach
<table class="table">
	<thead>
		<tr>
            <th>Matakuliah</th> 
		</tr>
	</thead>
	<tbody>
        @foreach($krs as $s)
		<tr>
			<td>
			@foreach(explode(',',$s->matkul) as $z)
				{{$z}} <br>
			@endforeach
			</td>
		</tr>
        @endforeach
	</tbody>


	<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>
<body>

<h2>Cell that spans two rows</h2>
<p>To make a cell span more than one row, use the rowspan attribute.</p>

<table style="width:100%">
  <tr>
    <th>NIM</th>
    <th>:</th>
    <td>0200302</td>
  </tr>
  <tr>
    <th>Nama</th>
    <th>:</th>
    <td>Bill Gates</td>
  </tr>
  <tr>
    <th rowspan="9">Matakuliah</th>
    <th rowspan="9">:</th>
    <td>55577854</td>
  </tr>
  <tr>
    <td>55577855</td>
  </tr>
  <tr>
    <td>55577855</td>
  </tr>
  <tr>
    <td>55577855</td>
  </tr>
  <tr>
    <td>55577855</td>
  </tr>
  <tr>
    <td>55577855</td>
  </tr>
</table>

</body>
</html>


</table>  --}}

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>
<body>

<h2>Formulir Rencana Studi</h2>


<table style="width:100%">
	@foreach($mhs as $m)
	<tr>
		<th>NIM</th>
		<th>:</th>
		<th>{{$m->nim}}</th>
	</tr>
	<tr>
		<th>Nama</th>
		<th>:</th>
	    <th>{{$m->nama}}</th>
	</tr>
	@endforeach

  <tr>
    <th>Matakuliah</th>
    <th>:</th>
    @foreach($krs as $s)
		
			<td>
			@foreach(explode(',',$s->matkul) as $z)
				{{$z}} <br>
			@endforeach
			</td>
		
	@endforeach
  </tr>
    
</table>

</body>
</html>
