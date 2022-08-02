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
    <div class="container-fluid"> <a role="button" id="sidebarCollapse" class="btn btn-info text-white"> <i class="fas fa-arrow-left"></i> </a>
      <h5 class="mr-auto ml-3 text-white" style="margin-top: 7px">Futsal</h5>
      <a role="button" id="sidebarCollapse2" class="btn btn-info text-white"> <i class="fas fa-share-alt"></i> </a> </div>
  </nav>
</section>
<section>
  <div class="container mb-5">
    <section style="margin-top: -20px">
      <div class="dropdown shadow-sm">
        <button class="btn dropdown-toggle w-100 ml-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Seluruh Cabang </button>
        <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Penyisihan Putra</a> <a class="dropdown-item" href="#">Penyisihan Putri</a></div>
      </div>
    </section>
    <section class="mt-3">
    <!-- card -->
      <div class="card text-center">
        <div class="card-body">
          <div class="row">
            <div class="col"><i class="fas fa-circle fa-4x text-secondary"></i>
              <p class="ml-1 mt-2">FILKOM</p>
            </div>
            <div class="col text-secondary mt-3">
              <h1 class="d-inline">0</h1>
              <h1 class="d-inline">-</h1>
              <h1 class="d-inline">0</h1>
            </div>
            <div class="col"><i class="fas fa-circle fa-4x text-secondary"></i>
              <p class="ml-1 mt-2">FILKOM</p>
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