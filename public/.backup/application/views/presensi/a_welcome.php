<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<title>ORSIM Brawijaya 2019</title>
<script>
function goBack() {
    window.history.back();
}
</script>
</head>
<body style="background-color: #1B2937">
<div class="container text-white text-center" style="margin-top: 70px">
  <h3>WELCOME TO <br>
    <?php echo strtoupper($data["nama_acara"]); ?></h3>
  <img src="http://siakad.ub.ac.id/siam/biodata.fotobynim.php?nim=<?php echo str_replace(" ","","$data[nim]")?>&key=MzIxZm90b3V5ZTEyMysyMDE4LTA4LTIxIDIxOjA2OjAw" alt="" class="img-fluid mt-3">
  <h4 class="mt-3"><?php echo $data["nama"];?></h4>
  
  <h3>FAKULTAS <?php echo strtoupper($data["fak"]); ?><br>
  <?php echo '20'.substr($data["nim"],0,2); ?></h3>
  <form action="isi" method="post">
    <input type="text" readonly hidden name="nim" value="<?php echo $data["nim"];?>">
    <input type="text" readonly hidden name="status" value="<?php echo $status?>">
    <input type="text" readonly hidden name="nama" value="<?php echo $data["nama"];?>">
    <input type="text" readonly hidden name="fakultas" value="<?php echo $data["fak"];?>">
    <input type="text" readonly hidden name="id_acara" value="<?php echo $data["id_acara"];?>">
  <button class="btn btn-secondary mr-5 mt-4" onclick="goBack()" type="button" style="width: 150px">CANCEL</button>
  <button class="btn btn-primary mt-4" type="submit" style="width: 150px">SUBMIT</button>
  </form>
</div>
</body>
</html>