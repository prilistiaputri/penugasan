<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: Situs Web ::..</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Detail Produk</h2><br />

<table width="500px" align="center" class="table-striped">
<tr>
        <td>Nomor Urut</td>
        <td>:</td>
        <td>{{$siswa->id}}</td>
    </tr>
    <tr>
        <td>Nama </td>
        <td>:</td>
        <td>{{$siswa->name}}</td>
    </tr>

    <tr>
        <td>Nomor HP</td>
        <td>:</td>
        <td>{{$siswa->nohp}}</td>
    </tr>

    <tr>
        <td>Alamat Email</td>
        <td>:</td>
        <td>{{$siswa->email}}</td>
    </tr>

  

    <tr>
        <td>Data Ditambahkan</td>
        <td>:</td>
        <td>{{$siswa->created_at}}</td>
    </tr>

    <tr>
        <td>Data Terakhir Diedit</td>
        <td>:</td>
        <td>{{$siswa->updated_at}}</td>
    </tr>
</table>
<div align="center">
<a href="{{action('SiswaController@index', $siswa['id'])}}"
class="btn btn-primary">Kembali</a>



</div>
</body>
</html>

