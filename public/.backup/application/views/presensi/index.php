<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
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
    <div class="col-3 text-white" style="background-color: #FF9900; height: 100vh">
      <div class="col" style="margin-top: 100px">
        <img src="http://siakad.ub.ac.id/siam/biodata.fotobynim.php?nim=<?php echo $_SESSION["nim"] ?>&key=MzIxZm90b3V5ZTEyMysyMDE4LTA4LTIxIDIxOjA2OjAw"
          alt="" class="w-25 img-fluid float-left">
        <section>
          <p style="margin-left: 90px">Welcome,</p>
          <h5 style="margin-left: 90px"><?php echo word_limiter($_SESSION['nama'] , 2) ?></h5>
        </section>
      </div>
      <div class="col" style="margin-top: 120px">
      <a href="<?php echo base_url()."DataAcara/daftarLaman"?>"><button type="button" class="btn btn-info w-100"><i class="fas fa-list-ul"></i> DAFTAR LAMAN PRESENSI</button></a>
      <ul class="list-group">
        <?php
        if($status == false){
        }else{
        foreach ($data as $cetak) {
        ?>
            <li class="list-group-item"><a href="<?php echo base_url()."DataAcara/detail/".$cetak->ID_ACARA; ?>"> <?php echo $cetak->NAMA_ACARA; ?> </a></li>
        <?php  
          }}
        ?>  
        </ul>
        <a href="<?php echo base_url()."DataAcara/inputAcara/" ?>"><button type="button" class="btn btn-info mt-4 w-100"><i class="fas fa-plus"></i> TAMBAH PRESENSI</button></a> 
    </div>
      <div class="col mt-5">
        <a href="<?php echo base_url()."login/logoutKetob"?>">
            <button type="button" class="btn btn-danger w-100"><i class="fas fa-power-off"></i> LOGOUT</button>
        </a>
      </div>
      <br>
      <br>
    </div>
    <div class="col" style="background-color: #F7F1F1">
      <div class="row" style="background-color: #E5E5E5; height: 120px">
        <h2 class="font-weight-bold mx-auto my-auto text-secondary"><img src="img/Group 6.png" alt="" class="img-fluid mr-4"
            style="width: 70px">PRESENSI APPS</h2>
      </div>
      <div class="row ml-3 mr-3">
        <div class="shadow-sm bg-white w-100 mt-4">
          <div class="card-body ">
            <h1 class="text-secondary font-weight-bold card-title text-center" style="font-size: 50px">SELAMAT DATANG
              DI <br>
              APLIKASI PRESENSI <br>
              ORSIM BRAWIJAYA <br>
              2019</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>