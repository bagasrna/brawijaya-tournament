<!doctype html>
<html lang="en">
<head>
<?php
include "template/head.php";
?>
</head>
<body>
<section> 
  <!-- Page Content  -->
  <nav class="navbar navbar-light" style="background-color: #1F2944">
    <div class="container-fluid"> <a role="button" id="sidebarCollapse" onclick=previous() class="btn btn-info text-white"> <i class="fas fa-arrow-left"></i> </a> <a role="button" id="sidebarCollapse2" class="btn btn-info text-white"> <i class="fas fa-share-alt"></i> </a> </div>
  </nav>
</section>
<section>
  <div class="mb-5 container" style="margin-top: -35px">
    <section class="mt-5">
    <?php
      foreach ($data as $cetak) {
    ?>
        <div class="card mt-3">
          <img class="card-img-top" src="<?php echo $cetak->FOTO_BERITA?>" alt="">
          <div class="card-body">
            <h5 class="card-title"><?php echo $cetak->JUDUL_BERITA?></h5>
            <p class="text-muted"><?php echo date('d M Y', strtotime($cetak->WAKTU_BERITA)) ?></p>
            <pre><?php echo $data[0]->ISI_BERITA?></pre>
          </div>
        </div>
      <?php 
    }
      ?>
    </section>
  </div>
</section>
<?php
include "template/footer.php"
?>
</body>
</html>