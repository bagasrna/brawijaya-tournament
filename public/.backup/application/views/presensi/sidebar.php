    <div class="col-3 text-white left" style="background-color: #FF9900; position: absolute; height: 100%">
    <div class="col" style="margin-top: 100px"> 
      <img src="http://siakad.ub.ac.id/siam/biodata.fotobynim.php?nim=<?php echo $_SESSION['nim'] ?>&key=MzIxZm90b3V5ZTEyMysyMDE4LTA4LTIxIDIxOjA2OjAw" alt="" class="w-25 img-fluid float-left">
      <section>
        <p class="float-left ml-2 mt-2 d-inline-block">Welcome,</p>
        <h5 class="ml-2 d-inline-block"><?php echo $_SESSION['nama'] ?></h5>
      </section>
    </div>
    <div class="col" style="margin-top: 120px">
      <a href="<?php echo base_url()."DataAcara/daftarLaman"?>"><button type="button" class="btn btn-info w-100"><i class="fas fa-list-ul"></i> DAFTAR KEHADIRAN</button></a>
      <ul class="list-group">
      <?php
        if($status == false){
        }else{
        foreach ($data as $cetak) {
      ?>
          <li class="list-group-item"><a href="<?php echo base_url()."DataAcara/detail/".$cetak->ID_ACARA; ?>"> <?php echo $cetak->NAMA_ACARA; ?> </a></li>
      <?php  
        }}
      ?>
      </ul>
      <a href="<?php echo base_url()."DataAcara/inputAcara/" ?>"><button type="button" class="btn btn-info mt-4 w-100"><i class="fas fa-plus"></i> TAMBAH PRESENSI</button></a> 
    </div>
    <div class="col">
    <a href="<?php echo base_url()."login/logoutKetob"?>">
      <button type="button" class="btn btn-danger mt-5 w-100"><i class="fas fa-power-off"></i> LOGOUT</button>
    </a>
    </div>
    <br>
    <br>
  </div>