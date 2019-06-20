<!DOCTYPE html>
<html>
<head>
	<title>Detail Issue</title>
	<meta charset="utf-8">
	<meta name="Author" content="Bangbang">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="image/png" rel="icon" href="<?php echo base_url();?>assets/logo/icon2.png">
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link href="<?php echo base_url();?>assets/fontawesome/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugin/css/bootstrap-datepicker.min.css"> 
	<script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/popper.js/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/fontawesome/js/all.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/plugin/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<header class="bg-light">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-1">
            			<br>
            			<img src="<?php echo base_url();?>assets/logo/bni-logo-id.svg" alt="logo-bni" >
            			<br>
            		</div>
					<div class="col-md-5">
						<h2 style="padding-top: 13px; margin-left: 70px;"><strong> Aplikasi Stock Opname <br>EDC BNI</strong></h2>
						
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
      					<a class="nav-link" href="<?php echo site_url();?>/stok_edc/tampil_issue">Kembali</a>
    				</li>

    				
  				</ul>
			</nav>
		</div>
<div class="container-fluid">
	<content>
		<div class="row">
			<div class="col-md-12" style="margin-top: 10px; margin-bottom: 15px;">
				<div class="card">
  					<div class="card-header">Detail Issue</div>
  					<div class="card-body">
  						<br>
              <form method="post" action="#" enctype="multipart/form-data">
                <?php 
               if(!empty($data_issue)) {
               foreach($data_issue as $data) {
               ?>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Serial Number </label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control" name="serial_number" value="<?php echo $data->serial_number;?>"  style="width: 1000px;" required="">
                      </div>
                    </div>
                </div> 
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Tipe EDC </label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control" name="tipe_edc" value="<?php echo $data->tipe_edc;?>"  style="width: 1000px;" required="">
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Kondisi 1</label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control" name="kondisi_1" value="<?php echo $data->kondisi;?>"  style="width: 1000px;" required="">
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Status EDC</label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control" name="status_edc" value="<?php echo $data->status_edc;?>"  style="width: 1000px;" required="">
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Kondisi 2</label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control" name="kondisi_edc" value="<?php echo $data->kondisi_edc;?>"  style="width: 1000px;" required="">
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">MID</label>
                    <div class="col-sm-10">
                      <div class="f">
                        : <input type="text" class="form-control" name="mid" value="<?php echo $data->mid;?>" style="width: 1000px;">
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">TID</label>
                    <div class="col-sm-10">
                      <div class="f">
                        : <input type="text" class="form-control" name="tid" value="<?php echo $data->tid;?>" style="width: 1000px;" >
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Nama Merchant/Agen</label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control" name="nama_merchant" value="<?php echo $data->nama_merchant;?>"  style="width: 1000px;">
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Alamat Merchant/Agen</label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <textarea rows="5" cols="30" class="form-control" name="alamat" value="<?php echo $data->alamat_merchant;?>" style="width: 1000px;"><?php echo $data->alamat_merchant;?></textarea> 
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Digunakan</label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control" name="digunakan" value="<?php echo $data->digunakan;?>"  style="width: 1000px;">
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label" >Vendor</label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control" name="vendor" value="<?php echo $data->vendor;?>"  style="width: 1000px;">
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control datepicker" name="date_in" value="<?php echo $data->date_in;?>" style="width: 1000px;">
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Tanggal Keluar</label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control datepicker" name="date_out" value="<?php echo $data->date_out;?>" style="width: 1000px;">
                      </div>
                    </div>
                </div> 
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Status Issue</label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control" name="status_issue" value="<?php echo $data->status_issue;?>" style="width: 1000px;">
                      </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                  <label class="col-sm-2 control-label">Case Issue</label>
                    <div class="col-sm-10">
                      <div class="f"> 
                        : <input type="text" class="form-control" name="case_issue" value="<?php echo $data->case_issue;?>" style="width: 1000px;">
                      </div>
                    </div>
                </div>
              </form>
                <a href="<?php echo site_url();?>/stok_edc/rusak_done_issue/<?php echo $data->id;?>"><button style="margin-left: 250px; margin-top: 30px; margin-bottom: 30px;" class="btn btn-primary">Rusak Done</button></a>
                <a href="<?php echo site_url();?>/stok_edc/rusak_replace_issue/<?php echo $data->id;?>"><button style="margin-left: 30px; margin-top: 30px; margin-bottom: 30px;" class="btn btn-primary">Rusak Replace</button></a>
                <a href="<?php echo site_url();?>/stok_edc/baik_replace_issue/<?php echo $data->id;?>"><button style="margin-left: 30px; margin-top: 30px; margin-bottom: 30px;" class="btn btn-primary">Baik Replace</button></a>
                <a href="<?php echo site_url();?>/stok_edc/baik_done_issue/<?php echo $data->id;?>"><button style="margin-left: 30px; margin-top: 30px; margin-bottom: 30px;" class="btn btn-primary">Baik Done</button></a>
  					</div> 
            <?php 
             }
             } 
             ?>
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