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
<!-- <link rel="stylesheet" href="open-iconic/font/css/open-iconic-bootstrap.css"> -->
<!-- <link rel="stylesheet" href="css/main.css"> -->
<title>Olimpiade Brawijaya 2018</title>
    <link rel="icon" href="<?php echo base_url()?>asset/img/core-img/logo(2).png">
</head>
<body>
<div class="row">
<?php
      $url =explode('/',$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
      echo $sidebar;
    ?>
  <div class="col-9 offset-3" style="background-color: #F7F1F1; position: absolute">
    <div class="row" style="background-color: #E5E5E5; height: 120px">
      <h2 class="font-weight-bold mx-auto my-auto text-secondary"><img src="img/Group 6.png" alt="" class="img-fluid mr-4" style="width: 70px">PRESENSI APPS</h2>
    </div>
    <div class="row ml-3 mr-3">
      <div class="shadow-sm bg-white w-100 mt-4">
        <div class="card-body">
          <h2 class="text-secondary font-weight-bold card-title text-center"><?php echo $data['acara'][0]->NAMA_ACARA ?></h2>
          <p class="text-center"> <a href="" style="text-decoration: none" class="text-muted"><?php echo base_url() ?>presensi/buat/<?php echo $data['acara'][0]->ID_ACARA ?></a></p>
        </div>
      </div>
    </div>
    <div class="row ml-3 mr-3">
      <div class="shadow-sm bg-white w-100 mt-4">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h6>Tanggal : <?php echo  date('d F Y', strtotime($data['acara'][0]->TANGGAL_ACARA))  ?></h6>
            </div>
            <div class="col">
              <h6 class="text-center">Tempat: <?php echo $data['acara'][0]->TEMPAT_ACARA ?></h6>
            </div>
            <div class="col"><a href="<?php echo base_url().'presensi/cetak.php?id='.$data['acara'][0]->ID_ACARA ?>" role="button" style="text-decoration: none" class="text-secondary float-right"><i class="fas fa-download"></i> Unduh Excel</a></div>
          </div>
          <table class="table table-striped mt-4" id="presensi">
            <!-- <thead> -->
              <tr>
                <th scope="col">NO.</th>
                <th scope="col">NAMA LENGKAP</th>
                <th scope="col">NIM</th>
                <th scope="col">FAKULTAS</th>
                <th scope="col">WAKTU</th>
                <th scope="col">AKSI</th>
              </tr>
            <!-- </thead> -->
            <tbody>
              <?php
                $i=0;
                if($data['status']==true){
                foreach ($data['data'] as $cetak) {
                  $i++;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo word_limiter($cetak->NAMA_PESERTA,3)  ?></td>
                    <td><?php echo $cetak->NIM_PESERTA  ?></td>
                    <td><?php echo $cetak->FAKULTAS  ?></td>
                    <td><?php echo $cetak->WAKTU  ?></td>
                    <td><a href="<?php echo base_url()."DataAcara/deleteId/".$cetak->id."/".$url['3'] ?>" role="button" style="text-decoration: none" class="text-danger"><i class="fas fa-trash-alt"></i> DELETE</a></td>
                  </tr>
                  <?php
                }}
              ?>
            </tbody>
          </table>
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