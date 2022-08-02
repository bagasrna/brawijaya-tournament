<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url().'presensi/' ?>css/fontawesome-all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="open-iconic/font/css/open-iconic-bootstrap.css">
<link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="<?php echo base_url()?>asset/img/core-img/logo(2).png">
<title>ORSIM Brawijaya 2019</title>
</head>
<body>
<div class="row">
  <?php
      echo $sidebar;
    ?>
  <div class="col-9 offset-3" style="background-color: #F7F1F1; position: absolute">
    <div class="row" style="background-color: #E5E5E5; height: 120px">
      <h2 class="font-weight-bold mx-auto my-auto text-secondary"><img src="img/Group 6.png" alt="" class="img-fluid mr-4" style="width: 70px">PRESENSI APPS</h2>
    </div>
    <div class="row ml-3 mr-3">
      <div class="shadow-sm bg-white w-100 mt-4">
        <div class="card-body">
          <h2 class="text-secondary font-weight-bold card-title text-center">DAFTAR LAMAN PRESENSI</h2>
        </div>
      </div>
    </div>
    <div class="row ml-3 mr-3">
      <div class="shadow-sm bg-white w-100 mt-4">
        <div class="card-body">
          <table class="table table-striped mt-4">
            <thead>
              <tr>
                <th scope="col">NO.</th>
                <th scope="col">NAMA ACARA</th>
                <th scope="col">TANGGAL</th>
                <th scope="col">TEMPAT</th>
                <th scope="col">LINK</th>
                <th scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if($data['status'] == false){
                }else{
                $i=0;
                foreach ($data['data'] as $cetak) {
                  $i++;
                  ?>
                    <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><a href="<?php echo base_url()."DataAcara/detail/".$cetak->ID_ACARA; ?>" style="text-decoration:none;"> <?php echo $cetak->NAMA_ACARA; ?></a></td>
                      <td><?php echo  date('d F Y', strtotime($cetak->TANGGAL_ACARA))?></td>
                      <td><?php echo $cetak->TEMPAT_ACARA; ?></td>
                      <td><a href="<?php echo base_url()."presensi/buat/".$cetak->ID_ACARA ?>" target="_blank" style="text-decoration:none">Klik Disini</a></td>
                      <td><a href="<?php echo base_url()."DataAcara/deleteAcara/".$cetak->ID_ACARA ?>" role="button" style="text-decoration: none" class="text-danger"><i class="fas fa-trash-alt"></i> DELETE</a></td>
                    </tr>
                  <?php
                }}
              ?>
            </tbody>
          </table>
          <div class="text-center">
            <button class="btn" style="background-color: #0C5B79; text-decoration: none;"><a href="<?= base_url("DataAcara") ?>">Back To Halaman Presensi</a></button>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
  </div>
</div>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<script src="js/script.js" type="text/javascript"></script> 
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
</body>
</html>