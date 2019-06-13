<!DOCTYPE html>
<html>
<head>
	<title>Halaman EDC IN</title>
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
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_laporan">LAPORAN</a>
            </li>
    				<li style="margin-left: 850px;" class="nav-item">
    					<a class="nav-link" href="#">Logout</a>
    				</li>
  				</ul>
			</nav>
		</div>
<div class="container-fluid" style="height: 600px;">
	<content>
		<div class="row">
			<div style="margin-top: 10px; margin-bottom: 10px;" class="col-md-12">
				<div class="card">
  					<div class="card-header">Data EDC IN/EDC Masuk</div>
  					<div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-2">
                      <button style="height: 35px;">
                        <a href='<?php echo site_url();?>/stok_edc/form_edc_in' class="btn btn-light" style="padding-top: 0px; font-size: 14px;"><i class='fas fa-cash-register'></i>&nbsp;Tambah EDC Baru</a>
                      </button>
                    </div>
                    <div class="col-md-3">
                      <button style="height: 35px;">
                        <a href='<?php echo site_url();?>/stok_edc/tampil_import' class="btn btn-light" style="padding-top: 0px; font-size: 14px;"><i class='fas fa-cash-register'></i>&nbsp;Import dari Excel</a>
                      </button>
                    </div>
                    <div class="col-md-7">
                      <form method="post" action="<?php echo site_url();?>/stok_edc/cari_edc_in" enctype="multipart/form-data">
                        <div class="form-group form-inline">
                          <input type="text" name="search" placeholder="Search" class="form-control" style="width: 670px; border-top-right-radius: 0px;border-bottom-right-radius: 0px;">
                          <input type="submit" value="Cari" class="form-control btn btn-primary" style="border-top-left-radius: 0px;border-bottom-left-radius: 0px;">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>      
              </div>

  							<br>
  							<table class="table table-striped table-condensed table-hover cf" id="dataTables-example">
                            	<thead class="cf">
                                	<tr>
                                    	<th style='text-align:center'>Serial Number</th>
                                    	<th style='text-align:center'>Tipe EDC</th>
                                    	<th style='text-align:center'>Kondisi</th>
                                    	<th style='text-align:center'>Tanggal Masuk</th>
                                    	<th style='text-align:center'>Aksi</th>
                                	</tr>
                            	</thead>
                            	<tbody>
                                  
								<?php
									if(!empty($data_edc_in)){
    									foreach($data_edc_in as $data){ ?>
        							<tr>
        								<td style='text-align:center'  data-title='Serial Number'><?php echo $data->serial_number; ?></td>
        								<td style='text-align:center' data-title='Tipe EDC'><?php echo $data->tipe_edc; ?></td>
        								<td style='text-align:center'  data-title='Kondisi' ><?php echo $data->kondisi;?></td>
        								<td style='text-align:center'  data-title='Tanggal Masuk' ><?php echo $data->date_in;?></td>
        								<td style='text-align:center' data-title='aksi_edc_in'>
                    						<a href="<?php echo site_url();?>/stok_edc/detail_edc_in/<?php echo $data->serial_number;?>" class="label label-warning">
                    							<i class= 'fas fa-edit'></i>&nbsp;Detail</a>
                    						<a href="#" class="label label-danger">
                    							<i class= 'fas fa-trash'></i>&nbsp;Hapus</a>
              							</td>
    								</tr>
								<?php
								    }
									}
								?>
                                   
                            	</tbody>
                        	</table> 
                          <div class="row">
                            <div class="col-md-3">
                              <?php echo $this->pagination->create_links(); ?>
                            </div>
                          </div>
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