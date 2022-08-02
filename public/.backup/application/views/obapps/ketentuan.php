<!doctype html>
<html lang="en">
<head>
<?php
include "template/head.php";
?>
</head>
<body>
<section> 
<?php
include "template/navbar.php";
?>
  <div class="overlay"></div>
  <!-- Page Content  -->
  <nav class="navbar navbar-light" style="background-color: #1F2944">
    <div class="container-fluid">
      <button type="button" id="sidebarCollapse" class="btn btn-info"> <i class="fas fa-bars"></i> </button>
      <h5 class="mr-auto ml-3 text-white" style="margin-top: 7px">Beranda</h5>
    </div>
  </nav>
</section>
<section style="margin-top: -40px; background-color: #1F2944; color: #fff" class="shadow-sm ">
  <div class="row ">
    <ul class="nav myNav">
      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()."obapps/hari_ini/"; ?>">Hari Ini</a> </li>
      <li class="nav-item" style="margin-left: -10px"> <a class="nav-link" href="<?php echo base_url()."obapps/berita/"; ?>">Berita</a> </li>
      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()."obapps/klasemen/"; ?>">Klasemen</a> </li>
      <li class="nav-item"> <a class="nav-link active" href="<?php echo base_url()."obapps/ketentuan/"; ?>">Ketentuan</a> </li>
    </ul>
  </div>
</section>
<section>
  <div class="container mb-5">
    <section class="mt-3">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" data-toggle="collapse" data-target="#collapseOne" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" style="color:gray;text-decoration:none" aria-expanded="true" aria-controls="collapseOne">Pertandingan</button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body"> 
<pre>
a.Pertandingan indoor meliputi Venue (Gedung Widyaloka, GKM, UBTV, UBSC, GOR PERTAMINA, Perpustakaan UB , Kolam renang Gajayana)
b. Pertandingan Outdoor meliputi Venue (Lapangan Voli Samping GOR Pertamina), Lapangan UB Dieng, Teras Perpustakaan UB, Gazebo Raden Wijaya, Stadion Gajayana)
c. Semua Penonton diwajibkan menunjukkan kartu identitas :
    - Untuk mahasiswa UB menunjukan KTM atau SIAM .Untuk mahasiswa baru dapat menunjukan KTMS
    - Untuk Umum (non-Mahasiswa UB) dapat menunjukan KTP atau SIM
d. Panitia wajib melakukan pemeriksaan badan dan bawaan terhadap semua penonton dari benda yang bisa memberikan ancaman terhadap orang lain yang berada disekitarnya untuk disita atau diamankan oleh petugas keamanan selama pertandingan berlangsung (lampiran 1).
e. Panitia berhak melakukan pemisahan penonton pada setiap pertandingan
    - Untuk Supporter Fakultas A menempati area Fakultas A
    - Untuk Supporter Fakultas B menempati area Fakultas B
    - Untuk umum menempati tempat yang telah disediakan panitia
f. Didalam venue terdapat area steril Dimana area steril adalah area yang tidak boleh dilewati atau ditempati baik penonton maupun atlet kecuali panitia dan yang berkepentingan.
g. Pengembalian perlengkapan atau alat yang dititipkan bisa diambil dari pos penjagaan dengan menunjukkan dan memberitahu nomor yang telah diberikan panitia saat menitipkan barang, apabila nomor hilang maka partisipan harus menyerahkan fotocopy KTM/KTP/SIM. Waktu pengambilan barang maksimal 1X24 jam. Jika barang yang disita tidak diambil hingga melewati batas yang ditentukan maka kehilangan dan kerusakan bukan tanggung jawab panitia.
h. Semua penonton yang keluar dan masuk arena harus melalui pintu masuk dan keluar yang ditetapkan oleh pihak panitia.
i. Semua penonton yang keluar area venue, saat masuk kembali harus melakukan pemeriksaan ulang.
j. Semua penonton yang tidak mendapatkan tempat di area Supporter fakultas terkait tidak diperbolehkan menempati area Supporter fakultas lain ataupun area Supporter netral.
o. Bila terjadi kerusakan fasilitas olahraga ataupun lomba lainnya yang disebabkan oleh partisipan maka akan diserahkan ke penanggung jawab setiap venue untuk ditindak lanjuti.
p. Setelah pertandingan selesai, panitia berhak mensterilkan area Supporter dari supporter yang menonton pertandingan sebelumnya.
q. Untuk semua Venue terdapat area Supporter yang telah ditentukan oleh panitia. Jika penonton yang bukan berasal dari kedua fakultas tidak ingin menempati area Supporter netral yang telah disediakan maka secara terpaksa tidak diperkenankan untuk menonton pertandingan atau dikeluarkan dari venue.
</pre>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" data-toggle="collapse" data-target="#collapseTwo" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" style="color:gray;text-decoration:none"  type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Peraturan Tambahan </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
<pre>
a. Berlaku untuk pertandingan Indoor dan Outdoor
b. Adapun acuan peraturan yang digunakan dan wajib dipatuhi oleh seluruh partisipan dalam kegiatan Olimpiade Brawijaya 2018 yaitu mengenai “Kode Etik Mahasiswa Universitas Brawijaya” yang telah di tetapkan oleh Universitas Brawijaya dalam Pedoman Pendidikan Universitas Brawijaya (Lampiran 2)
c. Dilarang melempar/menjatuhkan barang apapun yang mengganggu/ membahayakan ke area pertandingan selama pertandingan berlangsung
d. Dilarang membuang sampah sembarangan, mengotori, merusak fasilitas, makan, minum dan merokok/vape di Venue.
e. Dilarang meneriakan/menyanyikan kata-kata, yel-yel yang berbau SARA, penghinaan, umpatan atau yang dapat memicu terjadinya keributan jika sampai terjadi hal tersebut, maka akan diberlakukan sanksi yang berada pada bab Sanksi.
g. Jika terjadi kericuhan/kerusuhan yang dapat membahayakan salah satu pihak atau lebih maka pertandingan dapat di berhentikan sementara (dengan pertimbangan keamanan)
h. Seluruh partisipan Olimpiade Brawijaya 2018 harus mentaati peraturan dan etika yang ada, dalam rangka menjaga keamanan, kenyamanan, kebersihan, dan kesuksesan lomba yang berlangsung.
i. Panitia berhak mengambil benda-benda atau hal-hal yang dianggap akan membahayakan atau mengganggu pada saat pertandingan.
j. Dilarang menitipkan helm ataupun barang berharga lainnya. Barang berharga yang dibawa masuk ke arena lomba (hp, laptop, dll) merupakan tanggung jawab pemilik barang.
k. Dilarang keras melakukan kekerasan atau kontak fisik yang dapat membahayakan partisipan Olimpiade Brawijaya 2018.
l. Jika didalam venue kedapatan atau ketahuan membawa barang-barang yang dilarang, maka panitia berhak untuk melakukan body checking dan pemeriksaan ulang terhadap pelanggar dan mengamankan barang yang dilarang tersebut hingga Waktu Terakhir pertandingan.
</pre>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" data-toggle="collapse" data-target="#collapseThree" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" style="color:gray;text-decoration:none" type="button" data-toggle="collapse" data-target="#collapseThree" > Barang Bawaan </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
<pre>
1. Makanan dan minuman
2. Botol/kaleng
3. Narkotika
4. Rokok
5. Korek api/pemantik api
6. Pengeras Suara 
7. Barang yang berbentuk tongkat berbahan apapun (seperti monopod atau tongsis dan tripod) kecuali untuk atribut fakultas seperti bendera (dengan ketentuan)
8. Petasan/benda peledak
9. Benda yang mengeluarkan gas/asap
10. Senjata api
11. Segala macam laser/yang menyilaukan mata
12. Segala macam aerosol (penyemprot)
13. Benda tajam
15. Semua bahan yang terbuat dari bahan-bahan yang dianggap membahayakan

Allowed:
1. Spanduk, hand banner, giant flag, bendera (dengan ketentuan)
2. Alatmusik bass drum/snare drum , megaphone (dengan ketentuan)
</pre>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
<?php
include "template/footer.php"
?>
</body>
</html>