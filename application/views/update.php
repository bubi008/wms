<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Halaman Update Data</h1>
	         <?php echo form_open() ?>
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" name="nama" value="<?php  ?>" required>
				  </div>
				  <div class="form-group">
				    <label for="telepon">Telepon</label>
				    <input type="text" class="form-control" name="telepon" value="<?php  ?>" required>
				  </div><div class="form-group">
				    <label for="alamat">Alamat</label>
				    <input type="text" class="form-control" name="alamat" value="<?php  ?>" required>
				  </div><div class="form-group">
				    <label for="kota">Kota</label>
				    <input type="text" class="form-control" name="kota" value="<?php  ?>" required>
				  </div><div class="form-group">
				    <label for="total">Total Belanja</label>
				    <input type="text" class="form-control" name="total" value="<?php  ?>" required>
				  </div>
				  <button type="submit" class="btn btn-primary btn-lg">Update</button>
				  <a href="<?php echo site_url('latihan_crud') ?>" class="btn btn-info btn-lg">Back To Index</a>
				<?php echo form_close() ?>				  
			</div>
		</div>
	</div>	
</body>
</html>