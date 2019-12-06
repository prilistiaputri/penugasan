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
<?php if(\Session::has('success')): ?>
<div class="alert alert-success">
<p><?php echo e(\Session::get('success')); ?></p>
</div><br />
<?php endif; ?>

<form method="GET" action="<?php echo e(action('SiswaController@find')); ?>">
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
<?php $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($siswa['id']); ?></td>
<td><?php echo e($siswa['name']); ?></td>
<td><?php echo e($siswa['nohp']); ?></td>
<td><?php echo e($siswa['email']); ?></td>
<td><a href="<?php echo e(action('SiswaController@show', $siswa['id'])); ?>"
class="btn btn-success">Detail</a></td>
<td><a href="<?php echo e(action('SiswaController@edit', $siswa['id'])); ?>"
class="btn btn-warning">Ubah</a></td>
<td>
<form action="<?php echo e(action('SiswaController@destroy',
$siswa['id'])); ?>" method="post">

<?php echo e(csrf_field()); ?>

<input name="_method" type="hidden" value="DELETE">
<button class="btn btn-danger" type="submit">Hapus</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php echo e($siswas->links()); ?>


<div align="center">
<a href="<?php echo e(action('SiswaController@create', $siswas['id'])); ?>"
class="btn btn-primary">Tambah Data Baru</a>

</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\siswa\resources\views/v1/index.blade.php ENDPATH**/ ?>