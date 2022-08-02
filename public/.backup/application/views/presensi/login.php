<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url()."presensi/"?>css/style.css" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url()."presensi/"?>open-iconic/font/css/open-iconic-bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url()."presensi/"?>css/fontawesome-all.min.css">
<link rel="stylesheet" href="<?php echo base_url()."presensi/"?>css/main.css">
<link rel="icon" href="<?php echo base_url()?>asset/assets/Logo Bulet-01.png">
<title>ORSIM Brawijaya 2019</title>
</head>
<body style="background-color: #F5F5F5">
<div class="card mx-auto shadow-sm" style="background-color: #FF9900; width: 40%; margin-top: 2%; border-radius: 15px; min-width: 300px">
  <div class="card-body">
    <p class="text-center"><img src="<?php echo base_url()."asset/assets/Logo Bulet-01.png" ?>" alt="Logo Olimpiade Brawijaya" class="img-fluid" style="width: 120px"></p>
    <h3 class="text-white text-center">SIGN IN SI KETOB</h3>
    <form class="mt-4" method="post" action="loginketob">
      <div class="form-group">
        <label for="nim" class="text-white offset-2">NIM</label>
        <input type="number" class="form-control col-8 offset-2" id="nim" name="nim" placeholder="Masukkan nim anda">
      </div>
      <div class="form-group">
        <label for="password" class="text-white offset-2">Password</label>
        <input type="password" class="form-control col-8 offset-2" id="password" name="password" placeholder="Masukkan password anda">
      </div>
      <button type="submit" class="btn text-white w-100 mt-5 col-8 offset-2 mb-5" style="background-color: #0C5B79">SIGN IN</button>
    </form>
  </div>
</div>
<p class="mt-2 text-center text-muted" style="font-size: 10px">Copyright © 2019 Olimpiade Brawijaya. All Rights Reserved.</p>
</body>
</html>