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
      <h5 class="mr-auto ml-3 text-white" style="margin-top: 7px">Favorit</h5>
    </div>
  </nav>
</section>
<section>
  <div class="container mb-5">    
    <section style="margin-top: -20px">
      <div class="card">
        <div class="card-body"><a href=""><i class="fas fa-star float-right mt-1" style="color: #FFCB32"></i></a>
          <h5 class="card-title">Futsal</h5>
          <h6 class="card-subtitle mb-2 text-muted">Babak Penyisihan Putri</h6>
          <p class="card-text d-inline"><i class="fas fa-circle fa-2x"></i></p>
          <p class="card-text d-inline"><i class="fas fa-circle fa-2x"></i></p>
          <h6 class="card-subtitle mb-2 text-muted mt-2">Finished</h6>
        </div>
      </div>
      <div class="card">
        <div class="card-body"><a href=""><i class="fas fa-star float-right mt-1" style="color: #FFCB32"></i></a>
          <h5 class="card-title">Lari</h5>
          <h6 class="card-subtitle mb-2 text-muted">Babak Penyisihan Putri</h6>
          <p class="card-text text-warning">Live Now</p>
          <h6 class="card-subtitle mb-2"><i class="fas fa-map-marker-alt text-info"></i><span class="ml-2 text-info">Lapangan Rampal</span></h6>
        </div>
      </div>
      <div class="card">
        <div class="card-body"><a href=""><i class="fas fa-star float-right mt-1" style="color: #FFCB32"></i></a>
          <h5 class="card-title">Karate</h5>
          <h6 class="card-subtitle mb-2 text-muted">Babak Penyisihan Putra</h6>
          <p class="card-text">10-10-2018 | 09:00</p>
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