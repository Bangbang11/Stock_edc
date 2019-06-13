<!DOCTYPE html>
<html>
<head>
	<title>Halaman Import</title>
	<meta charset="utf-8">
	<meta name="Author" content="Bangbang">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="image/png" rel="icon" href="<?php echo base_url();?>assets/logo/icon2.png">
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link href="<?php echo base_url();?>assets/fontawesome/css/all.css" rel="stylesheet">
	<script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/popper.js/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/fontawesome/js/all.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<br>
	<br>
	<br>
	<br>
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Import Data EDC Baru</h3>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo site_url();?>/stok_edc/import" enctype="multipart/form-data">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clipboard-list"></i></span>
						</div>
						<input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
					</div>
					<div class="form-group">
						<input type="submit" name="import" value="Import" class="btn btn-info" />
					</div>
				</form>
			</div>
			<div class="card-footer">
				<button class="btn btn-success" style="width: 100px; height: 40px;"><a href="<?php echo site_url();?>/stok_edc/tampil_edc_in" style="text-decoration: none;color: white;" ><i class="fas fa-arrow-left"></i>Kembali</a></button>
			</div>
		</div>
	</div>
</div>
</body>
</html>