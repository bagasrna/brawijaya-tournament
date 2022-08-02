<!doctype html>
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
      <h5 class="mr-auto ml-3 text-white" style="margin-top: 7px">Beranda</h5>
    </div>
  </nav>
</section>
<section style="margin-top: -40px; background-color: #1F2944; color: #fff" class="shadow-sm ">
  <div class="row ">
    <ul class="nav myNav">
      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()."obapps/hari_ini/"; ?>">Hari Ini</a> </li>
      <li class="nav-item" style="margin-left: -10px"> <a class="nav-link" href="<?php echo base_url()."obapps/berita/"; ?>">Berita</a> </li>
      <li class="nav-item"> <a class="nav-link active" href="<?php echo base_url()."obapps/klasemen/"; ?>">Klasemen</a> </li>
      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()."obapps/ketentuan/"; ?>">Ketentuan</a> </li>
    </ul>
  </div>
</section>
<section>
  <div class="container mb-5">
    <section class="mt-3">
    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Rank</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col"><i class="fas fa-medal" style="color: #FFDF00"></i></th>
                            <th scope="col"><i class="fas fa-medal" style="color: #D3D3D3"></i></th>
                            <th scope="col"><i class="fas fa-medal" style="color: #CD7F32"></i></th>
                            <th class="text-center" scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=0;
                            foreach ($data as $cetak) {
							$i++;
							$total=(int)$cetak->PEROLEHAN_PERUNGGU + (int)$cetak->PEROLEHAN_PERAK + (int)$cetak->PEROLEHAN_EMAS;
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $i; ?></td>
                            <td><a href="<?php echo base_url()."obapps/klasemennya/?fak=".$cetak->ID_FAKULTAS;?>"> <?php echo $cetak->NAMA_FAKULTAS; ?></a></td>
                            <td><?php echo $cetak->PEROLEHAN_EMAS; ?></td>
                            <td><?php echo $cetak->PEROLEHAN_PERAK; ?></td>
                            <td><?php echo $cetak->PEROLEHAN_PERUNGGU; ?></td>
                            <td class="text-center"><?php echo $total; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
      </table>
    </section>
  </div>
</section>
<?php
include "template/footer.php"
?>
</body>
</html>