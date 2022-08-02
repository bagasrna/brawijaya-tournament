<section class="about1">
    <div class="container h-100">
        <div class="row h-100 align-items-center" style="">
            <div class="col-12">
                <div class="container">
                    <div class="breadcrumb-content w-kuning fadeIn mt-5">
                        <h2 class="text-right" style="font-family: Gotham Italic"><b>SCHEDULE</b></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container col-md-8 text-center section_padding_100 mb-5">
        <section class="mt-3">
            <div class="dropdown shadow-sm">
                <button class="btn w-100 ml-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> TODAY </button>
            </div>
        </section>
        <section class="mt-3">
            <?php
            if ($status == false) {
                ?>
                <div class="text-center mt-5">
                    <h5>Not Found</h5>
                </div>
                <?php
                } else {
                    foreach ($data as $cetak) {
                        if ($cetak['JENIS_PERTANDINGAN'] == 'Versus') {
                            ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo strtoupper($cetak['KATEGORI_CABOR']) ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $cetak['NAMA_JADWAL'] ?></h6>
                                <p class="card-text d-inline"><img src="<?php echo base_url() . "asset/img/fak/" . $cetak['NAMA_FAKULTAS'] . ".png" ?>" style="max-width:60px; margin-right:10px" alt=""> <?php if ($cetak['SKOR'] == "") {
                                                                                                                                                                                                                    echo "0";
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo $cetak['SKOR'];
                                                                                                                                                                                                                } ?> -</p>
                                <p class="card-text d-inline"><?php if ($cetak['SKOR2'] == "") {
                                                                                echo "0";
                                                                            } else {
                                                                                echo $cetak['SKOR2'];
                                                                            } ?> <img src="<?php echo base_url() . "asset/img/fak/" . $cetak['NAMA_FAKULTAS2'] . ".png" ?>" style="max-width:55px;margin-left:10px" alt=""></p>
                                <p class="card-text text-warning"><?php echo date('d-M-Y H:i', strtotime($cetak['WAKTU'])) ?></p>
                                <h6 class="card-subtitle"><i class="fas fa-map-marker-alt text-info"></i><span class="ml-2 text-info"><?php echo $cetak['VENUE'] ?></span></h6>
                            </div>
                        </div>
                    <?php
                            } else {
                                ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo strtoupper($cetak['KATEGORI_CABOR']) ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $cetak['NAMA_JADWAL'] ?></h6>
                                <p class="card-text text-warning"><?php echo date('d-M-Y H:i', strtotime($cetak['WAKTU'])) ?></p>
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