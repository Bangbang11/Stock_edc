<!DOCTYPE html>
<html>
<head>
	<title>Halaman EDC IN</title>
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
          <div class="col-md-1">
            <br>
            <img src="<?php echo base_url();?>assets/logo/bni-logo-id.svg" alt="logo-bni">
            <br>
          </div>
					<div class="col-md-5">
						<h2 style="padding-top: 13px; margin-left: 70px;"><strong>Aplikasi Stok Opname <br>EDC BNI</strong></h2>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>
		<div>
			<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  				<ul class="navbar-nav">
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc">DASHBOARD</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_issue">ISSUE</a>
    				</li>
    				<li class="nav-item active">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_edc_in">EDC IN</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_edc_out">EDC OUT</a>
    				</li>
    				<li style="margin-left: 950px;" class="nav-item">
    					<a class="nav-link" href="#">Logout</a>
    				</li>
  				</ul>
			</nav>
		</div>
<div class="container-fluid">
	<content>
		<div class="row">
			<div style="margin-top: 10px; margin-bottom: 10px;" class="col-md-12">
				<div class="card">
  					<div class="card-header">Data EDC IN/EDC Masuk</div>
  					<div class="card-body">
  							<br>
  							<table class="table table-striped table-condensed table-hover cf" id="dataTables-example">
                            	<thead class="cf">
                                	<tr>
                                    	<th style='text-align:center'>Serial Number</th>
                                    	<th style='text-align:center'>Tipe EDC</th>
                                    	<th style='text-align:center'>MID</th>
                                    	<th style='text-align:center'>TID</th>
                                    	<th style='text-align:center'>Kondisi</th>
                                    	<th style='text-align:center'>Tanggal Masuk</th>
                                    	<th style='text-align:center'>Aksi</th>
                                	</tr>
                            	</thead>
                            	<tbody>
                                  
<!--								<?php
									if(!empty($data_person)){
    									foreach($data_person as $data){ ?>
        							<tr>
        								<td style='text-align:center'  data-title='No'><?php echo $data->id; ?></td>
        								<td style='text-align:center; text-transform:capitalize;' data-title='Nama'><?php echo $data->name; ?></td>
        								<td style='text-align:center'  data-title='kode_murid' ><?php echo $data->region_id; ?></td>
        								<td style='text-align:center'  data-title='kode_murid' ><?php echo $data->address; ?></td>
        								<td style='text-align:center'  data-title='kode_murid' ><?php echo $data->income;?></td>
        								<td style='text-align:center'  data-title='kode_murid' ><?php echo $data->created_at;?></td>
        								<td style='text-align:center' data-title='aksi_person'>
                    						<a href="#" class="label label-warning">
                    							<i class= 'fas fa-edit'></i>&nbsp;Ubah</a>
                    						<a href="#" class="label label-danger">
                    							<i class= 'fas fa-trash'></i>&nbsp;Hapus</a>
              							</td>
    								</tr>
								<?php
								    }
									}
								?>
                                   -->   
                            	</tbody>
                        	</table> 
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