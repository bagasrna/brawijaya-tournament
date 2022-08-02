<?php
include('template/head.php');
?>

<body>
<?php
include('template/navbar.php');
?>
    <!-- Header -->
    <div class="mosh-breadcumb-area" style="background-image: url(<?php echo base_url()?>asset/img/core-img/breadcumb.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Classement</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                                <li class="breadcrumb-item " aria-current="page"><a href="<?php echo base_url()?>classement">Detail Classement</a></li>
                                <!-- <li class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo $data[0]->NAMA_FAKULTAS ?></a></li> -->
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Klasemen -->
    <section>
            <div class="container col-md-8 mb-5 section_padding_100">
              <section class="mt-3">
              <?php
                if($message!='Data tidak ditemukan'){
              ?>
              <div class="text-center">
              <h4><?php echo $data[0]->NAMA_FAKULTAS ?></h4>
              </div> 
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Cabor</th>
                      <th scope="col"><i class="fas fa-medal" style="color: #FFDF00"></i></th>
                      <th scope="col"><i class="fas fa-medal" style="color: #D3D3D3"></i></th>
                      <th scope="col"><i class="fas fa-medal" style="color: #CD7F32"></i></th>
                      <th scope="col">Total</th>
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
                            <td><?php echo $i; ?></td>
                            <td><?php echo $cetak->NAMA_CABOR; ?></td>
                            <td><?php echo $cetak->PEROLEHAN_EMAS; ?></td>
                            <td><?php echo $cetak->PEROLEHAN_PERAK; ?></td>
                            <td><?php echo $cetak->PEROLEHAN_PERUNGGU; ?></td>
                            <td><?php echo $total; ?></td>
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
    <!-- sponsor -->
    <section class="section_padding_0_100">
    <div class="sponsorstitle">
        <h2>Sponsors</h2>
    </div>
    <div class="sponsors row">
        <div class="col-lg-6 a">
            <ul>
                <li>
                    <div id="box1">
                        <div id="overlay">
                            <span id="name">FIFGROUP</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-lg-6 b">
            <ul>
                <li>
                    <div id="box2">
                        <div id="overlay">
                            <span id="name">POTA BEE</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="box3">
                        <div id="overlay">
                            <span id="name">KRIS BEE</span>
                        </div>
                    </div>
                </li>
            </ul>

            <ul>
                <li>
                    <div id="box4">
                        <div id="overlay">
                            <span id="name">Dr. Shoes</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="box5">
                        <div id="overlay">
                            <span id="name">Ini & Itu Project</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="box6">
                        <div id="overlay">
                            <span id="name">Coolio Barbershop</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <ul>
            <li>
                <div id="box7">
                    <div id="overlay">
                        <span id="name">Coffee Toffee</span>
                    </div>
                </div>
            </li>
            <li>
                <div id="box8">
                    <div id="overlay">
                        <span id="name">Sate Thaichan</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    </div>
    </section>
    <!-- JARGON -->
    <section class="mosh-call-to-action-area bg-img bg-overlay section_padding_100" style="background-image: url(<?php echo base_url()?>asset/img/footer/sb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-heading">
                            <p>Olimpiade Brawijaya 2018</p>
                            <h2>Semangat Membara Glory Brawijaya !!!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

<?php
include ('template/footer.php');
?>
</body>

</html>