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
    <div class="container-fluid"> <a role="button" id="sidebarCollapse" onclick=previous() class="btn btn-info text-white"> <i class="fas fa-arrow-left"></i> </a>
      <h5 class="mr-auto ml-3 text-white" style="margin-top: 7px"><?php if($message!='Data tidak ditemukan'){ echo $data[0]->NAMA_FAKULTAS;} ?></h5>
    </div>
  </nav>
</section>
<section>
  <div class="container mb-5">
    <section class="mt-3">
    <?php
      if($message!='Data tidak ditemukan'){
     ?>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th class="text-center" scope="col">#</th>
                      <th scope="col">Cabor</th>
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
                                if($cetak->PEROLEHAN_PERUNGGU==0 && $cetak->PEROLEHAN_PERAK==0 && $cetak->PEROLEHAN_EMAS==0){

                                }else{
							$i++;
							$total=(int)$cetak->PEROLEHAN_PERUNGGU + (int)$cetak->PEROLEHAN_PERAK + (int)$cetak->PEROLEHAN_EMAS;
                        ?>
                        <tr>
                            <td class="text-center" ><?php echo $i; ?></td>
                            <td><?php echo $cetak->NAMA_CABOR; ?></td>
                            <td><?php echo $cetak->PEROLEHAN_EMAS; ?></td>
                            <td><?php echo $cetak->PEROLEHAN_PERAK; ?></td>
                            <td><?php echo $cetak->PEROLEHAN_PERUNGGU; ?></td>
                            <td class="text-center" ><?php echo $total; ?></td>
                        </tr>
                        <?php           
                        }}
                        ?>
                  </tbody>
                </table>
                <?php
                    }else{
                        echo "<div class='text-center'>
                        <h4>DATA TIDAK TERSEDIA</h4>
                        </div>";
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