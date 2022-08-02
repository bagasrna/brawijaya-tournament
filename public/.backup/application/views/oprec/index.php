<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULIR FIX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.0.0-beta.1.0.1/dist/css/mstepper.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script src="<?php echo base_url('oprec/')?>js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://unpkg.com/materialize-stepper@3.0.0-beta.1.0.1/dist/js/mstepper.min.js"></script>

    <script src="<?php echo base_url('oprec/')?>js/validate.js"></script>
</head>

<body class="" style="background: radial-gradient(ellipse at bottom, #03716F 0%, #153E54 100%);">
    <br>
    <div class="container row z-depth-3 section grey lighten-3">

        <div class="col s12 l3 center-align">
            <br>
            <img src="http://siakad.ub.ac.id/siam/biodata.fotobynim.php?nim=165150401111060&key=MzIxZm90b3V5ZTEyMysyMDE5LTAxLTI4IDE1OjExOjQ3"
                alt="">
            <h6>GHANY ABDILLAH ERSA</h6>
            <h6>ILMU KOMPUTER</h6>
            <h6>SISTEM INFORMASI</h6>
            <h6>2016</h6>
        </div>

        <div class="col s12 l9">
            <div class="center-align">
                <h4>FORMULIR</h4>
                <h5>STAF MADYA EM UB 2019</h5>
            </div>
            <div class="">
                <div class="row">
                    <form class="col s12" method="POST" action="coba.php">

                        <ul data-method="POST" class="stepper linear">
                            <li class="step">
                                <div class="step-title waves-effect waves-dark">Data Diri</div>
                                <div class="step-content">
                                    <p>Formulir diisi dengan data diri yang sebenar-benarnya atau valid</p>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input required id="panggilan" name="panggilan" type="text" class="validate">
                                            <label for="panggilan">Panggilan</label>

                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="cita" name="cita" type="text" class="validate">
                                            <label for="cita">Cita-cita tahun 2030</label>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input required id="tempat" name="tempat" type="text" class="validate">
                                            <label for="tempat">Tempat</label>

                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="lahir" name="tl" type="text" class="datepicker validate">
                                            <label for="lahir">Tanggal Lahir</label>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input required id="asal" name="tempat" type="text" class="validate">
                                            <label for="asal">Alamat Asal</label>

                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="malang" name="tl" type="text" class=" validate">
                                            <label for="malang">Alamat Malang</label>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input required id="hp" name="hp" type="number" class="validate">
                                            <label for="hp">No.Telepon</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="line" name="line" type="text" class=" validate">
                                            <label for="line">ID Line</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="email" name="email" type="text" class=" validate">
                                            <label for="email">E-mail</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="ig" name="ig" type="text" class=" validate">
                                            <label for="ig">Instagram</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="ortu" name="ortu" type="number" class="validate">
                                            <label for="ortu">No.Telepon Orang Tua</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="wali" name="wali" type="text" class=" validate">
                                            <label for="wali">No. Telepon Wali/Orang Terdekat</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input required id="hobi" name="hobi" type="text" class="validate">
                                            <label for="hobi">Hobi</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="motto" name="motto" type="text" class=" validate">
                                            <label for="motto">Motto Hidup</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="anak" name="anak" type="text" class="validate">
                                            <label for="anak">Anak Ke</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="dari" name="dari" type="text" class=" validate">
                                            <label for="dari">Dari Bersaudara</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="sakit" name="sakit" type="text" class=" validate">
                                            <label for="sakit">Riwayat Sakit</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <select name="darah">
                                                <option value="" disabled selected>-- Pilih Golongan Darah --</option>
                                                <option value="A">Golongan Darah A</option>
                                                <option value="B">Golongan Darah B</option>
                                                <option value="AB">Golongan Darah AB</option>
                                                <option value="O">Golongan Darah O</option>
                                            </select>

                                        </div>
                                        <div class="input-field col s6">
                                            <select name="agama">
                                                <option value="" disabled selected>-- Pilih Agama --</option>
                                                <option value="ISLAM">ISLAM</option>
                                                <option value="KATOLIK">KATOLIK</option>
                                                <option value="KRISTEN">KRISTEN</option>
                                                <option value="HINDU">HINDU</option>
                                                <option value="BUDHA">BUDHA</option>
                                                <option value="KONGHUCU">KONGHUCHU</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="step-actions">
                                        <button class="waves-effect waves-dark btn blue next-step" data-feedback="anyThing">Continue</button>
                                    </div>
                                </div>
                            </li>
                            <li class="step ">
                                <div class="step-title waves-effect waves-dark">Riwayat Hidup</div>
                                <div class="step-content">
                                    <h5>Pendidikan Formal</h5>
                                    <div class="row" id="pf">
                                        <div>
                                            <div class="input-field col s4">
                                                <input id="jenjang_pf" name="jenjang_pf[]" type="text" class="validate">
                                                <label for="jenjang_pf">Jenjang</label>

                                            </div>
                                            <div class="input-field col s4">
                                                <input id="instansi_pf" name="instansi_pf[]" type="text" class=" validate">
                                                <label for="instansi_pf">Instansi</label>

                                            </div>
                                            <div class="input-field col s3">
                                                <input id="tahun_pf" name="tahun_pf[]" type="number" class=" validate">
                                                <label for="tahun_pf">Tahun</label>

                                            </div>
                                            <div class="input-field col s1">
                                                <button class="btn-floating  btn-small" type="button" id="addpf"><i
                                                        class="material-icons right">add</i>button</button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <h5>Pendidikan Non Formal</h5>
                                    <div class="row" id="pnf">
                                        <div class="input-field col s4">
                                            <input id="jenjang_pnf" name="jenjang_pnf[]" type="text" class="validate">
                                            <label for="jenjang_pnf">Jenjang</label>

                                        </div>
                                        <div class="input-field col s4">
                                            <input id="instansi_pnf" name="instansi_pnf[]" type="text" class=" validate">
                                            <label for="instansi_pnf">Instansi</label>

                                        </div>
                                        <div class="input-field col s3">
                                            <input id="tahun_pnf" name="tahun_pnf[]" type="number" class=" validate">
                                            <label for="tahun_pnf">Tahun</label>

                                        </div>
                                        <div class="input-field col s1">
                                            <button class="btn-floating  btn-small" type="button"><i class="material-icons right"
                                                    id="addpnf">add</i>button</button>
                                        </div>
                                    </div>
                                    <br>
                                    <h5>Pengalaman Organisasi</h5>
                                    <div class="row" id="po">
                                        <div class="input-field col s4">
                                            <input id="jabatan_po" name="jabatan_po[]" type="text" class="validate">
                                            <label for="jabatan_po">Jabatan</label>

                                        </div>
                                        <div class="input-field col s4">
                                            <input id="instansi_po" name="instansi_po[]" type="text" class=" validate">
                                            <label for="instansi_po">Instansi</label>

                                        </div>
                                        <div class="input-field col s3">
                                            <input id="tahun_po" name="tahun_po[]" type="number" class=" validate">
                                            <label for="tahun_po">Tahun</label>

                                        </div>
                                        <div class="input-field col s1">
                                            <button class="btn-floating  btn-small" type="button"><i class="material-icons right"
                                                    id="addpo">add</i>button</button>
                                        </div>
                                    </div>
                                    <br>

                                    <h5>Organisasi Yang Sedang Diikuti</h5>
                                    <div class="row" id="sd">
                                        <div class="input-field col s4">
                                            <input id="jabatan_sd" name="jabatan_sd[]" type="text" class="validate">
                                            <label for="jabatan_sd">Jabatan</label>

                                        </div>
                                        <div class="input-field col s4">
                                            <input id="instansi_sd" name="instansi_sd[]" type="text" class=" validate">
                                            <label for="instansi_sd">Instansi</label>

                                        </div>
                                        <div class="input-field col s3">
                                            <input id="tahun_sd" name="tahun_sd[]" type="number" class=" validate">
                                            <label for="tahun_sd">Tahun</label>

                                        </div>
                                        <div class="input-field col s1">
                                            <button class="btn-floating  btn-small" type="button"><i class="material-icons right"
                                                    id="addsd">add</i>button</button>
                                        </div>
                                    </div>

                                    <br>

                                    <h5>Pengalaman Kepanitiaan</h5>
                                    <div class="row" id="pk">
                                        <div class="input-field col s4">
                                            <input id="jabatan_pk" name="jabatan_pk[]" type="text" class="validate">
                                            <label for="jabatan_pk">Jabatan</label>

                                        </div>
                                        <div class="input-field col s4">
                                            <input id="instansi_pk" name="instansi_pk[]" type="text" class=" validate">
                                            <label for="instansi_pk">Nama Acara</label>

                                        </div>
                                        <div class="input-field col s3">
                                            <input id="tahun_pk" name="tahun_pk[]" type="number" class=" validate">
                                            <label for="tahun_pk">Tahun</label>

                                        </div>
                                        <div class="input-field col s1">
                                            <button class="btn-floating  btn-small" type="button"><i class="material-icons right"
                                                    id="addpk">add</i>button</button>
                                        </div>
                                    </div>
                                    <br>

                                    <h5>Kepanitiaan Yang Sedang/Akan Diikuti 6 Bulan Kedepan</h5>
                                    <div class="row" id="ad">
                                        <div class="input-field col s4">
                                            <input id="jabatan_ad" name="jabatan_ad[]" type="text" class="validate">
                                            <label for="jabatan_ad">Jabatan</label>

                                        </div>
                                        <div class="input-field col s4">
                                            <input id="instansi_ad" name="instansi_ad[]" type="text" class=" validate">
                                            <label for="instansi_ad">Nama Acara</label>

                                        </div>
                                        <div class="input-field col s3">
                                            <input id="tahun_ad" name="tahun_ad[]" type="number" class=" validate">
                                            <label for="tahun_ad">Tahun</label>

                                        </div>
                                        <div class="input-field col s1">
                                            <button class="btn-floating  btn-small" type="button"><i class="material-icons right"
                                                    id="addad">add</i>button</button>
                                        </div>
                                    </div>
                                    <br>

                                    <h5>Prestasi</h5>
                                    <div class="row" id="p">
                                        <div class="input-field col s4">
                                            <input id="tingkat_p" name="tingkat_p[]" type="text" class="validate">
                                            <label for="tingkat_p">Tingkat</label>

                                        </div>
                                        <div class="input-field col s4">
                                            <input id="prestasi_p" name="prestasi_p[]" type="text" class=" validate">
                                            <label for="prestasi_p">Prestasi</label>

                                        </div>
                                        <div class="input-field col s3">
                                            <input id="tahun_p" name="tahun_p[]" type="number" class=" validate">
                                            <label for="tahun_p">Tahun</label>

                                        </div>
                                        <div class="input-field col s1">
                                            <button class="btn-floating  btn-small" type="button"><i class="material-icons right"
                                                    id="addp">add</i>button</button>
                                        </div>
                                    </div>
                                    <br>
                                    <h5>Pengalaman Pembicara / Narasumber / Trainer</h5>
                                    <div class="row" id="t">
                                        <div class="input-field col s4">
                                            <input id="tingkat_t" name="tingkat_t[]" type="text" class="validate">
                                            <label for="tingkat_t">Tingkat</label>

                                        </div>
                                        <div class="input-field col s4">
                                            <input id="prestasi_t" name="prestasi_t[]" type="text" class=" validate">
                                            <label for="prestasi_t">Selaku & Nama Acara</label>

                                        </div>
                                        <div class="input-field col s3">
                                            <input id="tahun_t" name="tahun_t[]" type="number" class=" validate">
                                            <label for="tahun_t">Tahun</label>

                                        </div>
                                        <div class="input-field col s1">
                                            <button class="btn-floating  btn-small" type="button"><i class="material-icons right"
                                                    id="addt">add</i>button</button>
                                        </div>
                                    </div>
                                    <div class="step-actions">
                                        <button class="waves-effect waves-dark btn blue next-step">CONTINUE</button>
                                        <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                                    </div>
                                </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect waves-dark">Fasilitas, Jaringan dan Skill</div>
                                <div class="step-content">
                                    <p>Silahkan pilih untuk fasilitas yang dimiliki</p>
                                    <div class="row">
                                        <div class="col s6">
                                            <p>
                                                <input name='fasilitas[]' type="checkbox" class="filled-in" id="handphone"
                                                    value='Drone' />
                                                <label for="drone">Drone</label>
                                            </p>
                                            <p>
                                                <input name='fasilitas[]' type="checkbox" class="filled-in" id="Mobil"
                                                    value='Mobil' />
                                                <label for="Mobil">Mobil</label>
                                            </p>
                                            <p>
                                                <input name='fasilitas[]' type="checkbox" class="filled-in" id="Laptop / Tab"
                                                    value='Laptop / Tab' />
                                                <label for="Laptop / Tab">Laptop / Tab</label>
                                            </p>
                                        </div>
                                        <div class="col s6">
                                            <p>
                                                <input name='fasilitas[]' type="checkbox" class="filled-in" id="Kamera Digital"
                                                    value='Kamera Digital' />
                                                <label for="Kamera Digital">Kamera Digital</label>
                                            </p>
                                            <p>
                                                <input name='fasilitas[]' type="checkbox" class="filled-in" id="Motor"
                                                    value='Motor' />
                                                <label for="Motor">Motor</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" class="filled-in" id="lainnya" />
                                                <input type="text" for="lainnya" name="fasilitas[]" placeholder="lainnya : ...">
                                            </p>
                                        </div>
                                    </div>

                                    <p>Silahkan pilih untuk jaringan yang dimiliki</p>
                                    <div class="row">
                                        <div class="col s6">
                                            <p>
                                                <input name='jaringan[]' type="checkbox" class="filled-in" id="Transportasi"
                                                    value='Transportasi' />
                                                <label for="Transportasi">Transportasi</label>
                                            </p>
                                            <p>
                                                <input name='jaringan[]' type="checkbox" class="filled-in" id="Public Figure"
                                                    value='Public Figure' />
                                                <label for="Public Figure">Public Figure</label>
                                            </p>
                                            <p>
                                                <input name='jaringan[]' type="checkbox" class="filled-in" id="Desain Grafis / Percetakan"
                                                    value='Desain Grafis / Percetakan' />
                                                <label for="Desain Grafis / Percetakan">Desain Grafis / Percetakan</label>
                                            </p>
                                        </div>
                                        <div class="col s6">
                                            <p>
                                                <input name='jaringan[]' type="checkbox" class="filled-in" id="Peralatan Pesta"
                                                    value='Peralatan Pesta' />
                                                <label for="Peralatan Pesta">Peralatan Pesta</label>
                                            </p>
                                            <p>
                                                <input name='jaringan[]' type="checkbox" class="filled-in" id="Katering / Makanan"
                                                    value='Katering / Makanan' />
                                                <label for="Katering / Makanan">Katering / Makanan</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" class="filled-in" id="lainnya" />
                                                <input type="text" for="lainnya" name="jaringan[]" placeholder="lainnya : ...">
                                            </p>
                                        </div>
                                    </div>

                                    <p>Silahkan pilih untuk keahlian yang dimiliki</p>
                                    <div class="row">
                                        <div class="col s6">
                                            <p>
                                                <input name='keahlian[]' type="checkbox" class="filled-in" id="Desain Grafis"
                                                    value='Desain Grafis' />
                                                <label for="Desain Grafis">Desain Grafis</label>
                                            </p>
                                            <p>
                                                <input name='keahlian[]' type="checkbox" class="filled-in" id="Multimedia / Videografi"
                                                    value='Multimedia / Videografi' />
                                                <label for="Multimedia / Videografi">Multimedia / Videografi</label>
                                            </p>
                                            <p>
                                                <input name='keahlian[]' type="checkbox" class="filled-in" id="Master of Ceremony"
                                                    value='Master of Ceremony' />
                                                <label for="Master of Ceremony">Master of Ceremony</label>
                                            </p>
                                        </div>
                                        <div class="col s6">
                                            <p>
                                                <input name='keahlian[]' type="checkbox" class="filled-in" id="Bermain Alat Musik"
                                                    value='Bermain Alat Musik' />
                                                <label for="Bermain Alat Musik">Bermain Alat Musik</label>
                                            </p>
                                            <p>
                                                <input name='keahlian[]' type="checkbox" class="filled-in" id="Menyetir Mobil"
                                                    value='Menyetir Mobil' />
                                                <label for="Menyetir Mobil">Menyetir Mobil</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" class="filled-in" id="lainnya" />
                                                <input type="text" for="lainnya" name="keahlian[]" placeholder="lainnya : ...">
                                            </p>
                                        </div>
                                    </div>

                                    <div class="step-actions">
                                        <button class="waves-effect waves-dark btn blue next-step">CONTINUE</button>
                                        <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                                    </div>
                                </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect waves-dark">Pilihan Kementerian</div>
                                <div class="step-content">
                                    <div class="input-field col s12">
                                        <select name="pilihan1">
                                            <option value="" disabled selected>-- Pilih Kementerian Pertama --</option>
                                            <option value="ADMINISTRASI KESEKRETARIATAN">ADMINISTRASI KESEKRETARIATAN</option>
                                            <option value="ADMINISTRASI KEUANGAN">ADMINISTRASI KEUANGAN</option>
                                            <option value="EKONOMI KREATIF">EKONOMI KREATIF</option>
                                            <option value="PUSAT KOMUNIKASI &amp; INFORMASI">PUSAT KOMUNIKASI &amp;
                                                INFORMASI</option>
                                            <option value="STUDI DATA &amp; KREATIVITAS">STUDI DATA &amp; KREATIVITAS</option>
                                            <option value="ADVOKASI &amp; KESEJAHTERAAN MAHASISWA">ADVOKASI &amp;
                                                KESEJAHTERAAN MAHASISWA</option>
                                            <option value="KEBIJAKAN KAMPUS">KEBIJAKAN KAMPUS</option>
                                            <option value="KEBIJAKAN WILAYAH &amp; NASIONAL">KEBIJAKAN WILAYAH &amp;
                                                NASIONAL</option>
                                            <option value="SOSIAL MASYARAKAT">SOSIAL MASYARAKAT</option>
                                            <option value="LINGKUNGAN HIDUP">LINGKUNGAN HIDUP</option>
                                            <option value="BRAWIJAYA MENGAJAR">BRAWIJAYA MENGAJAR</option>
                                            <option value="PENGEMBANGAN SUMBER DAYA MAHASISWA">PENGEMBANGAN SUMBER DAYA
                                                MAHASISWA</option>
                                            <option value="JARINGAN PUBLIK">JARINGAN PUBLIK</option>
                                            <option value="PEMUDA &amp; OLAHRAGA">PEMUDA &amp; OLAHRAGA</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea2" class="materialize-textarea" name="alasan1"
                                                data-length="120"></textarea>
                                            <label for="textarea2">Alasan</label>
                                        </div>
                                    </div>

                                    <div class="input-field col s12">
                                        <select name="pilihan2">
                                            <option value="" disabled selected>-- Pilih Kementerian Kedua --</option>
                                            <option value="ADMINISTRASI KESEKRETARIATAN">ADMINISTRASI KESEKRETARIATAN</option>
                                            <option value="ADMINISTRASI KEUANGAN">ADMINISTRASI KEUANGAN</option>
                                            <option value="EKONOMI KREATIF">EKONOMI KREATIF</option>
                                            <option value="PUSAT KOMUNIKASI &amp; INFORMASI">PUSAT KOMUNIKASI &amp;
                                                INFORMASI</option>
                                            <option value="STUDI DATA &amp; KREATIVITAS">STUDI DATA &amp; KREATIVITAS</option>
                                            <option value="ADVOKASI &amp; KESEJAHTERAAN MAHASISWA">ADVOKASI &amp;
                                                KESEJAHTERAAN MAHASISWA</option>
                                            <option value="KEBIJAKAN KAMPUS">KEBIJAKAN KAMPUS</option>
                                            <option value="KEBIJAKAN WILAYAH &amp; NASIONAL">KEBIJAKAN WILAYAH &amp;
                                                NASIONAL</option>
                                            <option value="SOSIAL MASYARAKAT">SOSIAL MASYARAKAT</option>
                                            <option value="LINGKUNGAN HIDUP">LINGKUNGAN HIDUP</option>
                                            <option value="BRAWIJAYA MENGAJAR">BRAWIJAYA MENGAJAR</option>
                                            <option value="PENGEMBANGAN SUMBER DAYA MAHASISWA">PENGEMBANGAN SUMBER DAYA
                                                MAHASISWA</option>
                                            <option value="JARINGAN PUBLIK">JARINGAN PUBLIK</option>
                                            <option value="PEMUDA &amp; OLAHRAGA">PEMUDA &amp; OLAHRAGA</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea" name="alasan2"
                                                data-length="120"></textarea>
                                            <label for="textarea1">Alasan</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea3" class="materialize-textarea" name="alasan_umum"
                                                data-length="300"></textarea>
                                            <label for="textarea3">Alasan Masuk EM</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea" name="target"
                                                data-length="300"></textarea>
                                            <label for="textarea4">Sebutkan target ketika menjadi staf madya EM</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="textarea5" class="materialize-textarea" name="ide_kreatif "
                                                data-length="300"></textarea>
                                            <label for="textarea5">Ide Kreatif yg ingin Direalisasikan untuk UB Bersama
                                                EM UB 2019</label>
                                        </div>
                                    </div>
                                    <div class="step-actions">
                                        <button class="waves-effect waves-dark btn blue next-step">CONTINUE</button>
                                        <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                                    </div>
                                </div>
                            </li>
                            <li class="step">
                                <div class="step-title waves-effect waves-dark">Finally</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col s10">
                                            <select name="pilihan2">
                                                <option value="" disabled selected>-- UKURAN PDH --</option>
                                                <option value="S">S (54, 64, 58, 42)</option>
                                                <option value="M">M (56, 68, 59, 45)</option>
                                                <option value="L">L (58, 70, 60, 46)</option>
                                                <option value="XL">XL (60, 73, 61, 48)</option>
                                                <option value="XXL">XXL (63, 75, 61.5 50)</option>
                                                <option value="3XL">3XL (66, 76, 62, 52)</option>
                                            </select>
                                        </div>
                                        <div class="col s2">
                                            <div class="switch">
                                                <label>
                                                    Berhijab
                                                    <input type="checkbox" name="hijab">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <select name="pilihan1">
                                            <option value="" disabled selected>-- Pilih Jadwal Screening --</option>
                                            <option value="2 Februari 2019">2 Februari 2019 <span class="red">(250
                                                    Tiket)</span></option>
                                            <option value="3 Februari 2019">3 Februari 2019 <span class="red">(250
                                                    Tiket)</span></option>
                                            <option value="4 Februari 2019">4 Februari 2019 <span class="red">(250
                                                    Tiket)</span></option>
                                            <option value="5 Februari 2019">5 Februari 2019 <span class="red">(250
                                                    Tiket)</span></option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <p>
                                                <label>
                                                    <input required type="checkbox" class="filled-in" />
                                                    <span>Bersedia mengikuti tata tertib yg berlaku selama rangkaian rekrutmen terbuka staf madya EM UB 2019 dan siap berkomitmen penuh apabila menjadi staf madya EM UB 2019</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="col s12 right-align">
                                        <button class="btn waves-effect waves-light right-align" type="submit" name="action">Submit
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>


                    </form>
                </div>
            </div>

        </div>

    </div>

    <script src="<?php echo base_url('oprec/')?>js/add.js"></script>
    <script>
        var Calendar = document.querySelector('.datepicker');
        M.Datepicker.init(Calendar, {});

        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems, {});

        $(document).ready(function () {
            $('textarea#textarea1 , textarea#textarea2, textarea#textarea3').characterCounter();
        });

        function anyThing(destroyFeedback) {
            setTimeout(function () { destroyFeedback(true); }, 1500);
        }

        function noThing(destroyFeedback) {
            setTimeout(function () { destroyFeedback(true); }, 10000);
        }

        var stepperDiv = document.querySelector('.stepper');
        console.log(stepperDiv);
        var stepper = new MStepper(stepperDiv);

    </script>
</body>

</html>