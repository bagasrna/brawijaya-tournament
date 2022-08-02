<?php
include('template/head.php');
?>

<body>
<?php
include('template/navbar.php');
?>
    <!-- jumbotron/carosoule -->
    <section class="welcome_area clearfix" id="home" style="background-image: url(asset/img/bg-img/welcome-bg2.png)">
        <div class="hero-slides owl-carousel">
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <div class="hero-slide-content text-center">
                    <img class="slide-img" src="asset/img/bg-img/logo.png" alt="">
                </div>
            </div>
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <div class="hero-slide-content text-center">
                    <img class="slide-img" src="asset/img/bg-img/maskot.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- headline news -->
    <section style="margin-bottom:50px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mosh-service-slides owl-carousel">
                        <!-- slide news -->
                        <a href="<?php echo base_url()?>news/detail/11" >
                            <div class="single-service-area text-center">
                                <h2>01.</h2>
                                <h4>LAUNCHING LOGO OLIMPIADE BRAWIJAYA 2018</h4>
                                <p>Yuk lebih mengenal logo terbaru kita,  Karna pada bentuk dan warna tersisipkan tujuan dan harapan untuk tahun ini!</p>
                            </div>
                        </a>
                        <a href="<?php echo base_url()?>news/detail/33" >
                            <div class="single-service-area text-center">
                                <h2>02.</h2>
                                <h4>LAUNCHING MASCOT OLIMPIADE BRAWIJAYA 2018</h4>
                                <p>Maskot merupakan representatif dari karakter dari acara yang dibuat oleh suatu organisasi, klub, atau lembaga.</p>
                            </div>
                        </a>
                        <a href="<?php echo base_url()?>news/detail/31" >
                            <div class="single-service-area text-center">
                                <h2>03.</h2>
                                <h4>HARI OLAHRAGA NASIONAL 2018</h4>
                                <p>Hari ini bertepatan dengan memperingati Hari Olahraga Nasional (HAORNAS) ke-35 yang tengah berlangsung di Ternate.</p>
                            </div>
                        </a>
                        <a href="<?php echo base_url()?>news/detail/34" >
                            <div class="single-service-area text-center">
                                <h2>04.</h2>
                                <h4>INTRODUCTION CEREMONY KITA</h4>
                                <p> rangkaian acara dengan agenda Meet and Greet dan Parade. Konsep tegur sapa ini seolah Olimpiade Brawijaya bersama fakultas saling menikmati pertemuan.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pengertian OB -->
    <section class="mosh-features-area section_padding_70 clearfix">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-6">
                    <div class="section-heading">
                        <p>what is</p>
                        <h2>OLIMPIADE BRAWIJAYA </h2>
                    </div>
                    <div class="features-content">
                        <p class="text-justify">&emsp;&emsp; Olimpiade Brawijaya merupakan sebuah kegiatan di bidang
                            olahraga dan seni di
                            tingkat universitas yang diadakan dengan tujuan mengumpulkan seluruh unit civitas akademika
                            di lingkungan Universitas Brawijaya untuk meningkatkan dan mengasah minat, bakat, dan
                            kreativitas mahasiswa serta untuk memperluas wawasan dan mengembangkan potensi bagi
                            mahasiswa di bidang olahraga, seni , dan Penalaran. Olimpiade Brawijaya merupakan bukti
                            konkret sebuah kegiatan yang memberikan kesempatan kepada seluruh mahasiswa Universitas
                            Brawijaya untuk dapat membuktikan karyanya dalam bentuk prestasi.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="features-img">
            <img src="asset/img/bg-img/ob.png" alt="">
        </div>
    </section>

    <!-- Keterangan Rangkaian -->
    <section class="mosh-more-services-area d-sm-flex clearfix">
        <div class="single-more-service-area">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".1s">
                <img src="asset/img/core-img/ic.png" width="100px" alt="">
                <h4>Introduction Ceremony</h4>
                <p>pra-event dari rangkaian acara dengan agenda Meet and Greet dan
                    Parade. Konsep tegur sapa ini seolah Olimpiade Brawijaya bersama fakultas saling menikmati
                    pertemuan di acara ini.</p>
            </div>
        </div>
        <div class="single-more-service-area">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".4s">
                <img src="asset/img/core-img/oc.png" width="100px">
                <h4>Opening Ceremony</h4>
                <p>salah satu rangkaian acara Olimpiade Brawijaya 2018 yang bertugas sebagai tanda mulainya
                    ajang kompetisi yang penuh dengan sportifitas dan solidaritas</p>
            </div>
        </div>
        <div class="single-more-service-area">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".7s">
                <img src="asset/img/core-img/me.png" width="100px">
                <h4>Main Event</h4>
                <p>Rangaian acara inti yang ditunggu - tunggu oleh seluruh civitas akademika, karena pada rangkaian ini
                    kegiatan perlombaan di Olimpiade Brawijaya digelar.</p>
            </div>
        </div>
        <div class="single-more-service-area">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay="1s">
                <img src="asset/img/core-img/cc.png" width="100px">
                <h4>Closing Ceremony</h4>
                <p>Penghujung rangkaian acara Olimpiade Brawijaya 2018 yang penuh dengan gemerlap hasil keringat para
                    atlet yang telah berjuang mengharumkan nama fakultasnya.</p>
            </div>
        </div>
    </section>

       <!--Gallery -->
       <section class="up section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>See our Documentation</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="mosh-projects-menu">
            <div class="text-center portfolio-menu">
                <p class="active" data-filter="*">All</p>
                <p data-filter=".ic">Introduction Ceremony</p>
                <p data-filter=".oc">Opening Ceremony</p>
                <p data-filter=".mc">Main Event</p>
                <p data-filter=".cc">Closing Ceremony</p>
            </div>
        </div>

        <div class="mosh-portfolio text-center">
            <div class="single_gallery_item ic">
                <img src="<?php echo base_url()?>asset/img/doc-img/ic1.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Meet and Greet</h4>
                        <a href="https://drive.google.com/drive/folders/14yhNDslCeY03fmirx2nTho0oH5ufMksy?usp=sharing" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item ic">
                <img src="<?php echo base_url()?>asset/img/doc-img/ic2.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Meet and Greet</h4>
                        <a href="https://drive.google.com/drive/folders/14yhNDslCeY03fmirx2nTho0oH5ufMksy?usp=sharing" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item ic">
                <img src="<?php echo base_url()?>asset/img/doc-img/ic3.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Parade</h4>
                        <a href="https://drive.google.com/drive/folders/19FYpaVMQLAFID2EDRfEyuTlZh3b0tfEe?usp=sharing" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item ic">
                <img src="<?php echo base_url()?>asset/img/doc-img/ic4.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Parade</h4>
                        <a href="https://drive.google.com/drive/folders/19FYpaVMQLAFID2EDRfEyuTlZh3b0tfEe?usp=sharing" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
            <!-- OPENING -->
            <div class="single_gallery_item oc">
                <img src="<?php echo base_url()?>asset/img/core-img/op2.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Opening Ceremony</h4>
                        <a href="https://drive.google.com/drive/folders/1uF41J0iUmCXoNgi-ugy_4E-eKeg6qgif" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item oc">
                <img src="<?php echo base_url()?>asset/img/core-img/op3.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Opening Ceremony</h4>
                        <a href="https://drive.google.com/drive/folders/1uF41J0iUmCXoNgi-ugy_4E-eKeg6qgif" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
            
            <div class="single_gallery_item oc">
                <img src="<?php echo base_url()?>asset/img/core-img/op1.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Opening Ceremony</h4>
                        <a href="https://drive.google.com/drive/folders/1uF41J0iUmCXoNgi-ugy_4E-eKeg6qgif" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item oc">
                <img src="<?php echo base_url()?>asset/img/core-img/op4.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Opening Ceremony</h4>
                        <a href="https://drive.google.com/drive/folders/1uF41J0iUmCXoNgi-ugy_4E-eKeg6qgif" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
            <!-- MAIN EVENT -->
            <div class="single_gallery_item mc">
                <img src="<?php echo base_url()?>asset/img/core-img/mc1.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Main Event</h4>
                        <a href="https://drive.google.com/drive/folders/15TC_y2zDx7Fy_rpEilA9G_hsiZZJfhin?usp=sharing" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item mc">
                <img src="<?php echo base_url()?>asset/img/core-img/mc2.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Main Event</h4>
                        <a href="https://drive.google.com/drive/folders/15TC_y2zDx7Fy_rpEilA9G_hsiZZJfhin?usp=sharing" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item mc">
                <img src="<?php echo base_url()?>asset/img/core-img/mc3.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Main Event</h4>
                        <a href="https://drive.google.com/drive/folders/15TC_y2zDx7Fy_rpEilA9G_hsiZZJfhin?usp=sharing" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item mc">
                <img src="<?php echo base_url()?>asset/img/core-img/mc4.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Main Event</h4>
                        <a href="https://drive.google.com/drive/folders/15TC_y2zDx7Fy_rpEilA9G_hsiZZJfhin?usp=sharing" target="_blank">Go To Drive</a>
                    </div>
                </div>
            </div>
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
    <section class="mosh-call-to-action-area bg-img bg-overlay section_padding_100" style="background-image: url(asset/img/footer/opening.jpg);">
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

<?php
include ('template/footer.php');
?>
</body>

</html>