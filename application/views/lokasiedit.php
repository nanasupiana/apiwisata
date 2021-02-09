<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
</head>

<body>
<div class="container">
<h1>Lokasi Data</h1>
	<br />	
	<div class="row">
	<div class="col-md-12">
	<form method="post" action="<?php echo base_url('lokasidata/update_proses') ?>">	
	<div class="form-group">
			<label for="id">ID Lokasi</label>
			<input type="text" class="form-control" id="id" name="id" placeholder="Nama Lokasi" value="{id}" required>			
		</div>
		<div class="form-group">
			<label for="nama">Nama Lokasi</label>
			<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lokasi" value="{nama}" required>			
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Alamat Lokasi</label>
			<input type="text" class="form-control" id="alamat" name="alamat"  placeholder="Alamat Lokasi" value="{alamat}" required>			
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Provinsi</label>
			<input type="text" class="form-control" id="provinsi" name="provinsi" value="{provinsi}">			
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Kota</label>
			<input type="text" class="form-control" id="kota" name="kota" placeholder="kota" value="{kota}">			
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Kecamatan</label>
			<input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="{kecamatan}">			
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Desa</label>
			<input type="text" class="form-control" id="desa" name="desa"  placeholder="Desa" value="{desa}">			
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Informasi</label>
			<input type="text" class="form-control" id="informasi" name="informasi" placeholder="Informasi" value="{informasi}" required>			
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	</div>
</div>
	
</body>

</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable({
			"paging": false,
			"searching": false
		});
	});
</script>