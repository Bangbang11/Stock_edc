<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Anggota</title>
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
<div class="container-fluid bg-light">
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
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_edc_in">EDC IN</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_edc_out">EDC OUT</a>
    				</li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_laporan">LAPORAN</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url();?>/stok_edc/tambah_anggota">TAMBAH ANGGOTA</a>
            </li>
    				<li style="margin-left: 680px;" class="nav-item">
    					<a style="text-decoration: none; color: white;" href="<?php echo site_url();?>/login/logout"><button class="btn btn-secondary" type="button">Logout</button></a>
    				</li>
  				</ul>
			</nav>
		</div>
<div class="container-fluid" style="min-height: 600px;">
	<content>
		<div class="row">
			<div style="margin-top: 10px; margin-bottom: 10px;" class="col-md-12">
				<div class="card">
  					<div class="card-header">Data Anggota/Admin</div>
  					<div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-5">
                      <button style="height: 35px;">
                        <a href='<?php echo site_url();?>/stok_edc/add_anggota' class="btn btn-light" style="padding-top: 0px; font-size: 14px;"><i class='fas fa-cash-register'></i>&nbsp;Tambah Anggota Baru</a>
                      </button>
                    </div>
                    <div class="col-md-7">
                    </div>
                  </div>
                </div>      
              </div>

  							<br>
  							<table class="table table-striped table-condensed table-hover cf" id="dataTables-example">
                            	<thead class="cf">
                                	<tr>
                                    	<th style='text-align:center'>ID</th>
                                      <th style='text-align:center'>Nama</th>
                                      <th style='text-align:center'>NPP</th>
                                      <th style='text-align:center'>Jabatan</th>
                                      <th style='text-align:center'>Role</th>
                                    	<th style='text-align:center'>Username</th>
                                    	<th style='text-align:center'>Password</th>
                                    	<th style='text-align:center'>Tanggal Masuk</th>
                                    	<th style='text-align:center'>Aksi</th>
                                	</tr>
                            	</thead>
                            	<tbody>
                                  
								<?php
									if(!empty($data_tambah_anggota)){
    									foreach($data_tambah_anggota as $data){ ?>
        							<tr>
        								<td style='text-align:center'  data-title='ID'><?php echo $data->id; ?></td>
                        <td style='text-align:center'  data-title='Nama'><?php echo $data->nama; ?></td>
                        <td style='text-align:center'  data-title='NPP'><?php echo $data->npp; ?></td>
                        <td style='text-align:center'  data-title='Jabatan'><?php echo $data->jabatan; ?></td>
                        <td style='text-align:center'  data-title='Role'><?php echo $data->role; ?></td>
        								<td style='text-align:center' data-title='Username'><?php echo $data->username; ?></td>
        								<td style='text-align:center'  data-title='Password' ><?php echo $data->password;?></td>
        								<td style='text-align:center'  data-title='Created_at' ><?php echo $data->created_at;?></td>
        								<td style='text-align:center' data-title='aksi_anggota'>
                    						<a href="<?php echo site_url();?>/stok_edc/edit_data_anggota/<?php echo $data->id;?>" class="label label-warning">
                    							<i class= 'fas fa-edit'></i>&nbsp;Edit</a>
                    						<a href="<?php echo site_url();?>/stok_edc/hapus_anggota/<?php echo $data->id;?>" class="label label-danger">
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
	<footer class="">
		<div class="row">
      <div class="col-md-12 "><h6 style="text-align: center; color:orange;"> </h6></div>
      <div class="col-md-12 "><h6 style="text-align: center; color:black;">&copy; PT. Bank Negara Indonesia (Persero). Tbk</h6></div>
      <div class="col-md-12 "><h6 style="text-align: center; color:orange;"> </h6></div>
		</div>
	</footer>
</body>
</html>