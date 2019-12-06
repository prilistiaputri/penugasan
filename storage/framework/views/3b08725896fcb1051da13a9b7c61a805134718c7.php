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
<?php if($errors->any()): ?>
<div class="alert alert-danger">
<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div><br />
<?php endif; ?>
<form method="post" action="<?php echo e(action('SiswaController@update', $id)); ?>">
<?php echo e(csrf_field()); ?>

<input name="_method" type="hidden" value="PATCH">
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Nama :</label>
<input type="text" class="form-control" name="name" value="<?php echo e($siswa->name); ?>">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="nohp">Nomor HP :</label>
<input type="text" class="form-control" name="nohp" value="<?php echo e($siswa->nohp); ?>">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="nohp">Alamat Email:</label>
<input type="text" class="form-control" name="email" value="<?php echo e($siswa->email); ?>">
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
<?php /**PATH C:\xampp\htdocs\siswa\resources\views/v1/edit.blade.php ENDPATH**/ ?>