<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<title>ORSIM Brawijaya 2019</title>
</head>
<body style="background-color: #FF9900">
<div class="container text-white text-center" style="transform: translate(0%, 70%);">
  <h4 class="font-weight-light">PRESENSI APPS</h4>
  <h1><?php echo $data[0]->NAMA_ACARA ?></h1>
  <h2>ORSIM BRAWIJAYA 2019</h2>
  <form action="../checkData" method="post">
  <input class="form-control col-sm-6 offset-3 mt-4" name="nim" type="number">
  <input class="form-control col-sm-6 offset-3 mt-4" name="id_acara" type="number" value="<?php echo $data[0]->ID_ACARA ?>" readonly hidden>
  <input class="form-control col-sm-6 offset-3 mt-4" name="nama_acara" type="text" value="<?php echo $data[0]->NAMA_ACARA ?>" readonly hidden>
  <button type="submit" class="btn btn-light mt-4">SUBMIT</button>
  </form>
</div>
</body>
</html>