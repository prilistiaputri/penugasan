<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: Situs Web ::..</title>
<link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css>

</head>
<body>
<div class="container">
<h2>Perubahan Data Siswa</h2><br />
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div><br />
@endif
<form method="post" action="{{action('SiswaController@update', $id)}}">
{{csrf_field()}}
<input name="_method" type="hidden" value="PATCH">
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Nama :</label>
<input type="text" class="form-control" name="name" value="{{$siswa->name}}">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="nohp">Nomor HP :</label>
<input type="text" class="form-control" name="nohp" value="{{$siswa->nohp}}">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="nohp">Alamat Email:</label>
<input type="text" class="form-control" name="email" value="{{$siswa->email}}">
</div>
</div>

</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<button type="submit" class="btn btn-success" style="margin-left:38px">Update Data Siswa</button>
</div>
</div>
</form>
</div>
</body>
</html>
