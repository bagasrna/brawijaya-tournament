<section class="about1">
    <div class="container h-100">
        <div class="row h-100 align-items-center" style="">
            <div class="col-12">
                <div class="container">
                    <div class="breadcrumb-content w-kuning fadeIn mt-5">
                        <h2 class="text-right" style="font-family: Gotham Italic">ORSIM NEWS</h2>
                        <ol>
                            <li class="text-right"><a class="w-oren" href="<?php echo base_url()?>news" style="text-decoration: none;">NEWS</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container col-lg-8 section_padding_100 mb-5" style="background-color: #0C5B79; border-radius: 10px; color: #FFF;">
        <section class="mt-3">
            <div class="col-12">
                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-post-thumb">
                        <img src="<?php echo $data[0]->FOTO_BERITA ?>" alt="">
                    </div>
                    <div class="post-meta">
                        <h6>By PIT Olimpiade Brawijaya, <?php echo date('d F Y', strtotime($data[0]->WAKTU_BERITA)) ?></h6>
                    </div>
                    <h2><?php echo $data[0]->JUDUL_BERITA ?></h2>
                    <pre><?php echo $data[0]->ISI_BERITA ?></pre>
                </div>
            </div>
        </section>
    </div>
</section>