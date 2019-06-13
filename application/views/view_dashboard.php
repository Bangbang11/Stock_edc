<!DOCTYPE html>
<html>
<head>
	<title>Halaman Dashboard</title>
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
	<script type="text/javascript" src="<?php echo base_url();?>assets/chart/Chart.js"></script>
</head>
<body>
<div class="container-fluid">
	<header class="bg-light">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-1">
						<br>
						<img src="<?php echo base_url();?>assets/logo/bni-logo-id.svg" alt="logo-bni">
						<br>
					</div>
					<div class="col-md-5">
						<h2 style="padding-top: 13px; margin-left: 70px;"><strong>Aplikasi Stock Opname <br>EDC BNI</strong></h2>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>
		<div>
			<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  				<ul class="navbar-nav">
    				<li class="nav-item active">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc">DASHBOARD</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_issue">ISSUE</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_edc_in">EDC IN</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_edc_out">EDC OUT</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_laporan">LAPORAN</a>
    				</li>
    				
    				<li style="margin-left: 850px;" class="nav-item">
    					<a class="nav-link" href="<?php echo site_url();?>/login/logout">Logout</a>
    				</li>
  				</ul>
			</nav>
		</div>
<div class="container-fluid">
	<content>
		<div class="row">
			<div class="col-md-12" style="margin-top: 10px; margin-bottom: 15px;">
				<div class="card">
  					<div class="card-header">Dashboard</div>
  					<div class="card-body">
  						<div class="row">
  							<div class="col-md-3">
  								<div class="row">
  									<div class="col-md-12"><button class="btn btn-success" style="width: 100px; height: 100px; margin-bottom: 50px;margin-left: 70px;margin-top: 50px;"><a href="<?php echo site_url();?>/stok_edc/tampil_issue" style="text-decoration: none;color: white;" ><i class="fas fa-clipboard-list"></i> ISSUE</a></button></div>
  								</div>
  								<div class="row">
  									<div class="col-md-12"><button class="btn btn-success" style="width: 100px; height: 100px; margin-bottom: 50px;margin-left: 70px;margin-top: 50px;"><a href="<?php echo site_url();?>/stok_edc/tampil_edc_in" style="text-decoration: none;color: white;"><i class="fas fa-clipboard-list"></i> EDC IN</a></button></div>
  								</div>
  								<div class="row">
  									<div class="col-md-12"><button class="btn btn-success" style="width: 100px; height: 100px; margin-bottom: 50px;margin-left: 70px;margin-top: 50px;"><a href="<?php echo site_url();?>/stok_edc/tampil_edc_out" style="text-decoration: none;color: white;"><i class="fas fa-clipboard-list"></i> EDC OUT</a></button></div>
  								</div>
  							</div>
  							<div class="col-md-9">
  								<div class="media border p-3">

    								<div class="media-body">
										<div style="width: 500px;`">
											<canvas id="myChart"></canvas>
										</div>
										<br>
										<div style="width: 500px;`">
											<canvas id="myChart2"></canvas>
										</div>
    								</div>
  								</div>
  								
  							</div>
  						</div>
  						
						<script>
							var ctx = document.getElementById("myChart").getContext('2d');
							var myChart = new Chart(ctx, {
								type: 'bar',
								data: {
									labels: ["EDC BAIK", "EDC RUSAK"],
										datasets: [{
											label: 'Grafik Jumlah EDC Berdasarkan Kondisi EDC',
											data: [<?php echo $edc_baik;?>, <?php echo $edc_rusak;?>],
											backgroundColor: [
												'rgba(255, 99, 132, 0.2)',
												'rgba(255, 159, 64, 0.2)'
											],
											borderColor: [
												'rgba(255,99,132,1)',
												'rgba(255, 159, 64, 1)'
											],
											borderWidth: 1
											}]
										},
									options: {
										scales: {
											yAxes: [{
												ticks: {
													beginAtZero:true
												}
											}]
										}
									}
								});
					</script>

					<script>
							var ctx = document.getElementById("myChart2").getContext('2d');
							var myChart = new Chart(ctx, {
								type: 'bar',
								data: {
									labels: ["ICT220","ICT250","IWC220","MOVE2500","PAXD210"],
										datasets: [{
											label: 'Grafik Jumlah EDC dikelompokan Berdasarkan Tipe EDC',
											data: [<?php echo $edc_ict220;?>, <?php echo $edc_ict250;?>, <?php echo $edc_iwc220;?>, <?php echo $edc_move2500; ?>, <?php echo $edc_paxd210; ?>],
											backgroundColor: [
												'rgba(255, 99, 132, 0.2)',
												'rgba(54, 162, 235, 0.2)',
												'rgba(255, 206, 86, 0.2)',
												'rgba(75, 192, 192, 0.2)',
												'rgba(255, 159, 64, 0.2)'
											],
											borderColor: [
												'rgba(255,99,132,1)',
												'rgba(54, 162, 235, 1)',
												'rgba(255, 206, 86, 1)',
												'rgba(75, 192, 192, 1)',
												'rgba(255, 159, 64, 1)'
											],
											borderWidth: 1
											}]
										},
									options: {
										scales: {
											yAxes: [{
												ticks: {
													beginAtZero:true
												}
											}]
										}
									}
								});
					</script>

  					</div> 
  					<div class="card-footer"></div>
				</div>
			</div>
		</div>
	</content>
</div>
	<footer class="bg-secondary">
		<div class="row">
			<div class="col-md-12 "><h6 style="text-align: center; color:orange;"> </h6></div>
			<div class="col-md-12 "><h6 style="text-align: center; color:orange;">&copy; PT. Bank Negara Indonesia (Persero). Tbk</h6></div>
			<div class="col-md-12 "><h6 style="text-align: center; color:orange;"> </h6></div>
		</div>
	</footer>

	
</body>
</html>