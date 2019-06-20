<!DOCTYPE html>
<html>
<head>
  <title>Laporan</title>
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
  <h1 style="text-align: center;">LAPORAN EDC BNI46</h1>
  <hr>
    <table class="table table-striped table-condensed table-hover cf" id="dataTables-example" style="margin-left: 30px;">
        <thead class="cf">
            <tr>
              <th style='text-align:center;padding-right: 50px;padding-bottom: 15px;'>Serial Number</th>
              <th style='text-align:center;padding-right: 50px;padding-bottom: 15px;'>Tipe EDC</th>
              <th style='text-align:center;padding-right: 50px;padding-bottom: 15px;'>MID</th>
              <th style='text-align:center;padding-right: 50px;padding-bottom: 15px;'>TID</th>
              <th style='text-align:center;padding-right: 50px;padding-bottom: 15px;'>Kondisi</th>
              <th style='text-align:center;padding-right: 50px;padding-bottom: 15px;'>Tanggal Keluar</th>
            </tr>
        </thead>
        <br>
        <tbody>   
          <?php if(!empty($data_laporan_print)){
            foreach($data_laporan_print as $data){ ?>
            <tr>
              <td style='text-align:center;padding-right: 50px;'  data-title='Serial Number'><?php echo $data->serial_number; ?></td>
              <td style='text-align:center;padding-right: 50px;'  data-title='Tipe EDC' ><?php echo $data->tipe_edc; ?></td>
              <td style='text-align:center;padding-right: 50px;' data-title='MID'><?php echo $data->mid; ?></td>
              <td style='text-align:center;padding-right: 50px;' data-title='TID'><?php echo $data->tid; ?></td>
              <td style='text-align:center;padding-right: 50px;' data-title='Kondisi'><?php echo $data->kondisi; ?></td>
              <td style='text-align:center;padding-right: 50px;' data-title='Tanggal Keluar'><?php echo $data->date_out; ?></td>
            </tr>
            <?php
                }
              }
            ?>
        </tbody>
      </table>
</body>
</html>
