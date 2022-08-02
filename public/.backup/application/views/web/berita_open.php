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
                        <h2>OB News</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page"> <a href="<?php echo base_url()?>news">The News</a> </li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Detail</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News -->
    <section>
        <div class="container col-lg-8 section_padding_100 mb-5">
            <section class="mt-3">
                <div class="col-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-post-thumb">
                            <img src="<?php echo $data[0]->FOTO_BERITA?>" alt="">
                        </div>
                        <div class="post-meta">
                            <h6>By PIT Olimpiade Brawijaya, <?php echo date('d F Y', strtotime($data[0]->WAKTU_BERITA)) ?></h6>
                        </div>
                        <h2><?php echo $data[0]->JUDUL_BERITA?></h2>
                        <pre><?php echo $data[0]->ISI_BERITA?></pre>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- JARGON -->
    <section class="mosh-call-to-action-area bg-img bg-overlay section_padding_100" style="background-image: url(<?php echo base_url()?>asset/img/footer/padsu.jpg);">
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