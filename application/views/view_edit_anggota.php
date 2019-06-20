<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Anggota</title>
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
	<script type="text/javascript" src="<?php echo base_url();?>assets/plugin/js/bootstrap-datepicker.min.js"></script>
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
				<div class="row">
					<div class="col-sm-10"><h3>Edit Data Anggota</h3></div>
					<div class="col-sm-2">
						<button class="btn btn-success" style="width: 100px; height: 40px;"><a href="<?php echo site_url();?>/stok_edc/tambah_anggota" style="text-decoration: none;color: white;" ><i class="fas fa-arrow-left"></i>Kembali</a></button>
					</div>
				</div>
			</div>
			<?php 
               if(!empty($data_anggota)) {
               foreach($data_anggota as $data) {
               ?>
			<div class="card-body">
				<form method="post" action="<?php echo site_url();?>/stok_edc/update_data_anggota" enctype="multipart/form-data">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clipboard-list"></i>&nbsp; ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span>
						</div>
						<input type="text" name="id" value="<?php echo $data->id; ?>" class="form-control" style="min-width: 500px;" readonly /></p>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clipboard-list"></i>&nbsp; Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span>
						</div>
						<input type="text" name="nama" value="<?php echo $data->nama;?>" class="form-control" readonly /></p>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clipboard-list"></i>&nbsp; NPP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span>
						</div>
						<input type="text" name="npp" value="<?php echo $data->npp;?>" class="form-control" /></p>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clipboard-list"></i>&nbsp; Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span>
						</div>
						<input type="text" name="jabatan" value="<?php echo $data->jabatan;?>" class="form-control" /></p>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clipboard-list"></i>&nbsp; Role&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span>
						</div>
						<input type="text" name="role" value="<?php echo $data->role;?>" class="form-control" /></p>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clipboard-list"></i>&nbsp; Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span>
						</div>
						<input type="text" name="username" value="<?php echo $data->username;?>" class="form-control" /></p>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clipboard-list"></i>&nbsp; Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span>
						</div>
						<input type="text" name="password" value="<?php echo $data->password;?>" class="form-control" /></p>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clipboard-list"></i>&nbsp; Tanggal Update&nbsp; :</span>
						</div>
						<input type="text" name="updated_at" class="form-control datepicker" /></p>
					</div>
					<div class="form-group">
						<input type="submit" value="Simpan Perubahan" class="btn btn-info" />
					</div>
				</form>
			</div>
			<?php 
             }
             } 
             ?>
			<div class="card-footer">
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>
</body>
</html>