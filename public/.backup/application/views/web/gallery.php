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
                        <h2>Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url()?>gallery"> Our Work</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tampilan Video -->
    <section>
        <div class="trial owl-carousel section_padding_100_50">>
            <div class="text-center">
                <iframe  width="450" height="265" src="https://www.youtube.com/embed/w7f7SpJlVvc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="text-center">
                <iframe width="450" height="265" src="https://www.youtube.com/embed/ciL2-eiFBbs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="text-center">
                <iframe width="450" height="265" src="https://www.youtube.com/embed/OP1k7ioUCiE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="text-center">
                <iframe width="450" height="265" src="https://www.youtube.com/embed/xxelb_LGmjk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Informasi -->
    <section class="cool_facts_area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-area">
                            <h3><span class="counter">0.2</span> K</h3>
                        </div>
                        <div class="cool-facts-content">
                            <p>SUBCRIBER</p>
                            <p>YOUTUBE</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                            <h3><span class="counter">9.4</span> K</h3>
                        </div>
                        <div class="cool-facts-content">
                            <p>FOLLOWER </p>
                            <p>LINE</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-area">
                            <h3><span class="counter">3.2</span> K</h3>
                        </div>
                        <div class="cool-facts-content">
                            <p>FOLLOWER</p>
                            <p>INSTAGRAM</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-area">
                            <h3><span class="counter">2.7</span> K</h3>
                        </div>
                        <div class="cool-facts-content">
                            <p>FOLLOWER</p>
                            <p>TWITTER</p>
                        </div>
                    </div>
                </div>
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

    <!-- Aplikasi -->
    <section class="app-screenshots-area bg-white section_padding_100_50 clearfix" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-heading">
                        <h2>Our Prototype</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-12">
                <div class="app_screenshots_slides owl-carousel">
                    <div class="single-shot">
                        <img src="<?php echo base_url()?>asset/img/scr-img/1.png" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="<?php echo base_url()?>asset/img/scr-img/2.png" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="<?php echo base_url()?>asset/img/scr-img/3.png" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="<?php echo base_url()?>asset/img/scr-img/4.png" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="<?php echo base_url()?>asset/img/scr-img/5.png" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="<?php echo base_url()?>asset/img/scr-img/6.png" alt="">
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
    <section class="mosh-call-to-action-area bg-img bg-overlay section_padding_100" style="background-image: url(<?php echo base_url()?>asset/img/footer/karate.jpg);">
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