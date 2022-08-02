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
<title>ORSIM Brawijaya 2019</title>
    <link rel="icon" href="<?php echo base_url()?>asset/img/core-img/logo(2).png">
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
          <h2 class="text-secondary font-weight-bold card-title text-center">TAMBAH PRESENSI</h2>
        </div>
      </div>
    </div>
    <div class="row ml-3 mr-3">
      <div class="shadow-sm bg-white w-100 mt-4">
        <div class="card-body">
          <form action="<?php echo base_url()."DataAcara/setAcara"?>" method="post">
            <div class="form-group row">
              <label for="nama" class="col-2 col-form-label offset-2">NAMA ACARA</label>
              <div class="col-5">
                <input type="text" class="form-control" name="nama_acara" id="nama" placeholder="Masukkan nama acara">
              </div>
            </div>
            <div class="form-group row">
              <label for="tanggal" class="col-2 col-form-label offset-2">TANGGAL</label>
              <div class="col-5">
                <input type="date" class="form-control" name="tanggal_acara" id="tanggal" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="tempat" class="col-2 col-form-label offset-2">TEMPAT</label>
              <div class="col-5">
                <input type="text" class="form-control" name="tempat_acara" id="tempat" placeholder="Masukkan tempat acara">
              </div>
            </div>
            <button class="btn btn-primary text-center w-100 col-7 offset-2">BUAT</button>
          </form>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
  </div>
</div>
</body>
</html>