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
		<a href="<?php echo base_url('lokasidata/add') ?>"><button class="btn btn-sm btn-success btn-flat">Tambah</button></a>	
		<br/>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Provinsi</th>
						<th>kota</th>
						<th>Kecataman</th>
						<th>Desa</th>
						<th>Informasi</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($result as $lok) : ?>
						<tr>
							<td>
								<?php echo $lok->nama ?>
							</td>
							<td>
								<?php echo $lok->alamat ?>
							</td>
							<td>
								<?php echo $lok->provinsi ?>
							</td>
							<td>
								<?php echo $lok->kota ?>
							</td>
							<td>
								<?php echo $lok->kecamatan ?>
							</td>
							<td>
								<?php echo $lok->desa ?>
							</td>
							<td>
								<?php echo $lok->informasi ?>
							</td>
							<td>
								<a href="<?php echo base_url('lokasidata/detail/' . $lok->id) ?>"><button class="btn btn-sm btn-success btn-flat">Detail</button></a>								
							</td>

						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			</div>
</body>

</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
		$('#example').DataTable(
			{
				"paging": false,
				"searching": false
			}
		);
	});
</script>