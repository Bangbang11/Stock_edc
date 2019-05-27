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
  <h1 style="text-align: center;">APLIKASI STOCK OPNAME EDC BNI</h1>
<table class="table table-striped table-condensed table-hover cf" id="dataTables-example">
                            <thead class="cf">
                                <tr>
                                    <th style='text-align:center'>Serial Number</th>
                                    <th style='text-align:center'>Tipe EDC</th>
                                    <th style='text-align:center'>MID</th>
                                    <th style='text-align:center'>TID</th>
                                    <th style='text-align:center'>Kondisi</th>
                                    <th style='text-align:center'>Tanggal Keluar</th>
                                    <th style='text-align:center'>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>   
<?php if(!empty($data_laporan_print)){
                      foreach($data_laporan_print as $data){ ?>
<tr>
                      <td style='text-align:center'  data-title='Serial Number'><?php echo $data->serial_number; ?></td>
                      <td style='text-align:center'  data-title='Tipe EDC' ><?php echo $data->tipe_edc; ?></td>
                      <td style='text-align:center' data-title='MID'><?php echo $data->mid; ?></td>
                      <td style='text-align:center' data-title='TID'><?php echo $data->tid; ?></td>
                      <td style='text-align:center' data-title='Kondisi'><?php echo $data->kondisi; ?></td>
                      <td style='text-align:center' data-title='Tanggal Keluar'><?php echo $data->date_out; ?></td>
                      <td style='text-align:center' data-title='aksi_edc_out'>
                              
                          </td>
                  </tr>
                        <?php
                }
              }
                ?>
                </tbody>
                        </table>
</body>
</html>
