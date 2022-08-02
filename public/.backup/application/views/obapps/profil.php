<!DOCTYPE html>
<html lang="en">
<head>
<?php
include "template/head.php";
?>
</head>
<body>
<section> 
<?php
include "template/navbar.php";
?>
  <div class="overlay"></div>
  <!-- Page Content  -->
  <nav class="navbar navbar-light" style="background-color: #1F2944">
    <div class="container-fluid">
      <button type="button" id="sidebarCollapse" class="btn btn-info"> <i class="fas fa-bars"></i> </button>
      <h5 class="mr-auto ml-3 text-white" style="margin-top: 7px">Profil</h5>
    </div>
  </nav>
</section>
<section style="margin-top: -20px">
  <div class="container mb-5">
    <section>
      <div class="card shadow-sm">
        <div class="card-body text-center"> <img src="http://siakad.ub.ac.id/siam/biodata.fotobynim.php?nim=<?php echo $_SESSION["nim"];?>&key=MzIxZm90b3V5ZTEyMysyMDE4LTA5LTA1IDE2OjQ3OjA1" alt="Foto Profile">
          <br>
          <svg id="barcode"></svg>
          <hr>
          <h5 class="text-secondary"><?php echo $_SESSION["nama"];?></h5>
          <h6 class="text-secondary"><?php echo $_SESSION["fak"];?></h6>
          <h6 class="text-secondary"><?php echo '20'.substr($_SESSION["nim"],0,2);?></h6>
        </div>
      </div>
      <a href="https://olimpiade.ub.ac.id/login/logout">
      <button type="submit" class="btn w-100 mt-5" style="background-color: #FECB32; margin-bottom: 35px; height: 50px">Log Out</button></a>
    </section>
  </div>
</section>
<script>
        JsBarcode("#barcode", "<?php echo $_SESSION["nim"];?>");
</script>
<?php
include "template/footer.php"
?>
</body>
</html>