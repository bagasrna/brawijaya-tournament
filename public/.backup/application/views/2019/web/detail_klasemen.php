<section class="about1">
    <div class="container h-100">
        <div class="row h-100 align-items-center" style="">
            <div class="col-12">
                <div class="container">
                    <div class="breadcrumb-content w-kuning fadeIn mt-5">
                        <h2 class="text-right" style="font-family: Gotham Italic"><b>CLASSEMENT</b></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container col-md-8 mb-5 section_padding_100">
        <section class="mt-3">
            <?php
            if ($message != 'Data tidak ditemukan') {
                ?>
                <div class="text-center">
                    <h4><?php echo $data[0]->NAMA_FAKULTAS ?></h4>
                </div>
                <table class="table table-striped">
                    <thead style="background-color: #0C5B79;">
                        <tr style="color: #FFF">
                            <th scope="col">#</th>
                            <th scope="col">Cabang Lomba</th>
                            <th scope="col"><i class="fas fa-medal" style="color: #FFDF00"></i></th>
                            <th scope="col"><i class="fas fa-medal" style="color: #D3D3D3"></i></th>
                            <th scope="col"><i class="fas fa-medal" style="color: #CD7F32"></i></th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                            foreach ($data as $cetak) {
                                if ($cetak->PEROLEHAN_PERUNGGU == 0 && $cetak->PEROLEHAN_PERAK == 0 && $cetak->PEROLEHAN_EMAS == 0) { } else {
                                    $i++;
                                    $total = (int) $cetak->PEROLEHAN_PERUNGGU + (int) $cetak->PEROLEHAN_PERAK + (int) $cetak->PEROLEHAN_EMAS;
                                    ?>
                                <tr class="w-biru">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $cetak->NAMA_CABOR; ?></td>
                                    <td><?php echo $cetak->PEROLEHAN_EMAS; ?></td>
                                    <td><?php echo $cetak->PEROLEHAN_PERAK; ?></td>
                                    <td><?php echo $cetak->PEROLEHAN_PERUNGGU; ?></td>
                                    <td><?php echo $total; ?></td>
                                </tr>
                        <?php
                                }
                            }
                            ?>
                    </tbody>
                </table>
            <?php
            } else {
                echo "<div class='text-center'>
                    <h4>DATA TIDAK TERSEDIA</h4>
                    </div>";
            }
            ?>
        </section>
    </div>
</section>