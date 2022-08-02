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
                        <h2>Schedule</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url()?>schedule"> Today</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jadwal Hari Ini -->
    <section>
        <div class="container col-md-8 text-center section_padding_100 mb-5">
            <section class="mt-3">
                <div class="dropdown shadow-sm">
                    <button class="btn w-100 ml-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> TODAY </button>
                </div>
            </section>
            <section class="mt-3">
            <?php
                if($status==false){
                    ?>
                    <div class="text-center mt-5">
                        <h5>Not Found</h5>
                    </div>
                    <?php
                }else{
                foreach ($data as $cetak) {
                    if($cetak['JENIS_PERTANDINGAN']=='Versus'){
            ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo strtoupper($cetak['KATEGORI_CABOR']) ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $cetak['NAMA_JADWAL'] ?></h6>
                        <p class="card-text d-inline"><img src="<?php echo base_url()."asset/img/fak/".$cetak['NAMA_FAKULTAS'].".png"?>" style="max-width:60px; margin-right:10px" alt=""> <?php if($cetak['SKOR']==""){echo "0";}else{echo $cetak['SKOR'];} ?> -</p>
                        <p class="card-text d-inline"><?php if($cetak['SKOR2']==""){echo "0";}else{echo $cetak['SKOR2'];} ?> <img src="<?php echo base_url()."asset/img/fak/".$cetak['NAMA_FAKULTAS2'].".png"?>" style="max-width:55px;margin-left:10px" alt=""></p>
                        <p class="card-text text-warning"><?php echo date('d-M-Y H:i', strtotime($cetak['WAKTU'] ))?></p>
                        <h6 class="card-subtitle"><i class="fas fa-map-marker-alt text-info"></i><span class="ml-2 text-info"><?php echo $cetak['VENUE'] ?></span></h6>
                    </div>
                </div>
            <?php
                    }else{
            ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo strtoupper($cetak['KATEGORI_CABOR']) ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $cetak['NAMA_JADWAL'] ?></h6>
                       <p class="card-text text-warning"><?php echo date('d-M-Y H:i', strtotime($cetak['WAKTU'] ))?></p>
                        <h6 class="card-subtitle"><i class="fas fa-map-marker-alt text-info"></i><span class="ml-2 text-info"><?php echo $cetak['VENUE'] ?></span></h6>
                    </div>
                </div>

            <?php
                    }
                }
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
    <section class="mosh-call-to-action-area bg-img bg-overlay section_padding_100" style="background-image: url(<?php echo base_url()?>asset/img/footer/catur.jpg);">
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