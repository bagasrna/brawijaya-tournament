<section class="about1">
    <div class="container h-100">
        <div class="row h-100 align-items-center" style="">
            <div class="col-12">
                <div class="container">
                    <div class="breadcrumb-content w-kuning fadeIn mt-5">
                        <h2 class="text-right" style="font-family: Gotham Italic"><b>ORSIM NEWS</b></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container col-lg-8 section_padding_100 mb-5">
        <section class="mt-3">
            <?php
            $no = $this->uri->segment('5') + 1;
            foreach ($data as $cetak) {
                ?>
                <div class="col-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-post-thumb">
                            <img src="<?php echo $cetak->FOTO_BERITA ?>" alt="">
                        </div>
                        <div class="post-meta">
                            <h6>By PIT Olimpiade Brawijaya, <?php echo date('d F Y', strtotime($cetak->WAKTU_BERITA)) ?></h6>
                        </div>
                        <h2><?php echo $cetak->JUDUL_BERITA ?></h2>
                        <a href="<?php echo base_url() ?>news/detail/<?php echo $cetak->ID_BERITA ?>">Read More</a>
                    </div>
                </div>
            <?php
            }
            echo $this->pagination->create_links();
            ?>
        </section>
    </div>
</section>