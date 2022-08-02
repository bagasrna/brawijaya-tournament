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
    <div class="container-fluid"> <a role="button" id="sidebarCollapse" class="btn btn-info text-white"> <i class="fas fa-arrow-left"></i> </a>
      <h5 class="mr-auto ml-3 text-white" style="margin-top: 7px">FK</h5>
    </div>
  </nav>
</section>
<section>
  <div class="container mb-5">
    <section style="margin-top: -20px">
      <div class="dropdown shadow-sm">
        <button class="btn dropdown-toggle w-100 ml-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Seluruh Cabang </button>
        <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
          <h5 class="dropdown-header">Olahraga</h5>
          <a class="dropdown-item ml-3" href="#">Futsal</a> <a class="dropdown-item ml-3" href="#">Basket</a>
          <h5 class="dropdown-header">Seni</h5>
          <a class="dropdown-item ml-3" href="#">Menyanyi</a> <a class="dropdown-item ml-3" href="#">Fotografi</a> </div>
      </div>
    </section>
    <section class="mt-3">
      <div class="card">
        <div class="card-body"><a href=""><i class="far fa-star float-right text-secondary mt-1"></i></a>
          <h5 class="card-title">Futsal</h5>
          <h6 class="card-subtitle mb-2 text-muted">Babak Penyisihan Putri</h6>
          <p class="card-text d-inline"><i class="fas fa-circle fa-2x"></i></p>
          <p class="card-text d-inline"><i class="fas fa-circle fa-2x"></i></p>
          <h6 class="card-subtitle mb-2 text-muted mt-2">Finished</h6>
        </div>
      </div>
      <div class="card">
        <div class="card-body"><a href=""><i class="far fa-star float-right text-secondary mt-1"></i></a>
          <h5 class="card-title">Lari</h5>
          <h6 class="card-subtitle mb-2 text-muted">Babak Penyisihan Putri</h6>
          <p class="card-text text-warning">Live Now</p>
          <h6 class="card-subtitle mb-2"><i class="fas fa-map-marker-alt text-info"></i><span class="ml-2 text-info">Lapangan Rampal</span></h6>
        </div>
      </div>
      <div class="card">
        <div class="card-body"><a href=""><i class="far fa-star float-right text-secondary mt-1"></i></a>
          <h5 class="card-title">Karate</h5>
          <h6 class="card-subtitle mb-2 text-muted">Babak Penyisihan Putra</h6>
          <p class="card-text">10-10-2018 | 09:00</p>
          <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-map-marker-alt"></i><span class="ml-2">GOR</span></h6>
        </div>
      </div>
      <div class="card">
        <div class="card-body"><a href=""><i class="far fa-star float-right text-secondary mt-1"></i></a>
          <h5 class="card-title">Karate</h5>
          <h6 class="card-subtitle mb-2 text-muted">Babak Penyisihan Putri</h6>
          <p class="card-text">10-10-2018 | 13:00</p>
          <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-map-marker-alt"></i><span class="ml-2">GOR</span></h6>
        </div>
      </div>
    </section>
  </div>
</section>
<?php
include "template/footer.php"
?>
</body>
</html>