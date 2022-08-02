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
      <h5 class="mr-auto ml-3 text-white" style="margin-top: 7px">Hasil Pertandingan</h5>
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
      <div class="row">
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-body text-center"> <i class="fas fa-circle text-secondary fa-5x"></i>
              <p class="card-text mt-3">Lari</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-body text-center"> <i class="fas fa-circle text-secondary fa-5x"></i>
              <p class="card-text mt-3">Lari</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-body text-center"> <i class="fas fa-circle text-secondary fa-5x"></i>
              <p class="card-text mt-3">Lari</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-body text-center"> <i class="fas fa-circle text-secondary fa-5x"></i>
              <p class="card-text mt-3">Lari</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-body text-center"> <i class="fas fa-circle text-secondary fa-5x"></i>
              <p class="card-text mt-3">Lari</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-body text-center"> <i class="fas fa-circle text-secondary fa-5x"></i>
              <p class="card-text mt-3">Lari</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-body text-center"> <i class="fas fa-circle text-secondary fa-5x"></i>
              <p class="card-text mt-3">Lari</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-body text-center"> <i class="fas fa-circle text-secondary fa-5x"></i>
              <p class="card-text mt-3">Lari</p>
            </div>
          </div>
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