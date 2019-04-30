<!DOCTYPE html>
<html>
<head>
	<title>Halaman Issue</title>
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
    				<li class="nav-item active">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_issue">ISSUE</a>
    				</li>
    				<li class="nav-item">
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
			<div class="col-md-12" style="margin-top: 10px; margin-bottom: 15px;">
				<div class="card">
  					<div class="card-header">Data Regions</div>
  					<div class="card-body">
  						<button>
  							<a href='<?php echo site_url();?>/sensus/tambah_regions' class='btn btn-succes'><i class='fas fa-plus-square'></i>&nbsp;Tambah Regions</a>
  						</button>
  						<br>
  						<br>
  						<table class="table table-striped table-condensed table-hover cf" id="dataTables-example">
                            <thead class="cf">
                                <tr>
                                    <th style='text-align:center'>ID</th>
                                    <th style='text-align:center'>Name</th>
                                    <th style='text-align:center'>Created_at</th>
                                    <th style='text-align:center'>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                                  
<!--								<?php
									if(!empty($data_regions)){
    									foreach($data_regions as $data){ ?>
        						<tr>
        							<td style='text-align:center'  data-title='No'><?php echo $data->id; ?></td>
        							<td style='text-align:center'  data-title='kode_murid' ><?php echo $data->name; ?></td>
        							<td style='text-align:center; text-transform:capitalize;' data-title='Nama'><?php echo $data->created_at; ?></td>
       								<td style='text-align:center' data-title='aksi_regions'>
                    					<a href="<?php echo site_url();?>/sensus/ubah_data_regions/<?php echo $data->id; ?>" class="label label-warning">
                    						<i class= 'fas fa-edit'></i>&nbsp;Ubah</a>
                    					<a href="<?php echo site_url();?>/sensus/hapus_data_regions/<?php echo $data->id; ?>" class="label label-danger">
                    						<i class= 'fas fa-trash'></i>&nbsp;Hapus</a>
              						</td>
     							</tr> 
     							<?php
     						}
     					}
								?> -->
                                      
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