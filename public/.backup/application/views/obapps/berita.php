<!doctype html>
<html lang="en">
<head>
<?php
include "template/head.php";
?>
</head>
<body>
<section> 
  <!-- Sidebar  -->
<?php
include "template/navbar.php";
?>
  <div class="overlay"></div>
  <!-- Page Content  -->
  <nav class="navbar navbar-light" style="background-color: #1F2944">
    <div class="container-fluid">
      <button type="button" id="sidebarCollapse" class="btn btn-info"> <i class="fas fa-bars"></i> </button>
      <h5 class="mr-auto ml-3 text-white" style="margin-top: 7px">Beranda</h5>
    </div>
  </nav>
</section>
<section style="margin-top: -40px; background-color: #1F2944; color: #fff" class="shadow-sm ">
  <div class="row ">
    <ul class="nav myNav">
      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()."obapps/hari_ini/"; ?>">Hari Ini</a> </li>
      <li class="nav-item" style="margin-left: -10px"> <a class="nav-link active" href="<?php echo base_url()."obapps/berita/"; ?>">Berita</a> </li>
      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()."obapps/klasemen/"; ?>">Klasemen</a> </li>
      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()."obapps/ketentuan/"; ?>">Ketentuan</a> </li>
    </ul>
  </div>
</section>
<section>
  <div class="container mb-5">
    <section class="mt-3">
    <?php
      foreach ($data as $cetak) {
    ?>
      <a href="<?php echo base_url()."obapps/detail/".$cetak->ID_BERITA?>">
        <div class="card mt-3">
          <img class="card-img-top" src="<?php echo $cetak->FOTO_BERITA?>" alt="">
          <div class="card-body">
            <h5 class="card-title"><?php echo $cetak->JUDUL_BERITA?></h5>
            <p class="card-text"><?php echo word_limiter($cetak->ISI_BERITA,7);?></p>
          </div>
        </div>
      </a>
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