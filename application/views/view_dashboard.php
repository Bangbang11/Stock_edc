<!DOCTYPE html>
<html>
<head>
	<title>Halaman Dashboard</title>
	<meta charset="utf-8">
	<meta name="Author" content="Bangbang">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link href="<?php echo base_url();?>assets/fontawesome/css/all.css" rel="stylesheet">
	<script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/popper.js/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/fontawesome/js/all.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<header class="bg-light">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<br>
						<h2 style="margin-left: 10px;">Aplikasi Stok Opname <br>EDC BNI</h2>
						<br>
					</div>
				</div>
			</div>
		</div>
	</header>
		<div>
			<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  				<ul class="navbar-nav">
    				<li class="nav-item active">
      					<a class="nav-link" href="<?php echo site_url();?>/sensus">DASHBOARD</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/sensus/tampil_regions">ISSUE</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/sensus/tampil_person">EDC IN</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/sensus/data_penduduk">EDC OUT</a>
    				</li>
    				<li style="margin-left: 900px;" class="nav-item">
    					<a class="nav-link" href="#">Logout</a>
    				</li>
  				</ul>
			</nav>
		</div>
	<content>
		<div class="row">
			<div class="col-md-12">isi</div>
		</div>
	</content>
	<footer class="bg-light">
		<div class="row">
			<div class="col-md-12 "><h1 style="text-align: center;">ini footer</h1></div>
		</div>
	</footer>
</div>
</body>
</html>