<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: Situs Web ::..</title>
<link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css>
</head>
<body> <br> <br>
    <h1 align="center"> Database Siswa </h1>
<div class="container">
<br />
@if (\Session::has('success'))
<div class="alert alert-success">
<p>{{ \Session::get('success') }}</p>
</div><br />
@endif

<form method="GET" action="{{ action('SiswaController@find') }}">
<div class="input-group mb-3">
    <input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Siswa">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="submit">Cari</button>  
     </div>
  </div>
</form>


<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Nama Siswa </th>
<th>Nomor HP</th>
<th>Alamat Email </th>
<th colspan="2">Action</th>
</tr>
</thead>
<tbody>
@foreach($siswas as $siswa)
<tr>
<td>{{$siswa['id']}}</td>
<td>{{$siswa['name']}}</td>
<td>{{$siswa['nohp']}}</td>
<td>{{$siswa['email']}}</td>
<td><a href="{{action('SiswaController@show', $siswa['id'])}}"
class="btn btn-success">Detail</a></td>
<td><a href="{{action('SiswaController@edit', $siswa['id'])}}"
class="btn btn-warning">Ubah</a></td>
<td>
<form action="{{action('SiswaController@destroy',
$siswa['id'])}}" method="post">

{{csrf_field()}}
<input name="_method" type="hidden" value="DELETE">
<button class="btn btn-danger" type="submit">Hapus</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
{{ $siswas->links()}}

<div align="center">
<a href="{{action('SiswaController@create', $siswas['id'])}}"
class="btn btn-primary">Tambah Data Baru</a>

</div>
</body>
</html>
