<?php
    class DataLomFix extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Lomba');
            $this->load->model('Peserta');
        }

        public function getJadwalByWaktu() {
            $inputWaktu = date_create($this->input->get("waktu_cabor"));
            $waktu = date_format($inputWaktu, "Y-m-d");

            $result = $this->Lomba->jadwalByWaktu($waktu);
            echo json_encode($waktu);
        }

        public function getJadwalByFakultas() {
            $fakultas = strtoupper($this->input->get("fakultas"));

            $result = $this->Lomba->jadwalByFakultas($fakultas);

            echo json_encode($result);
        }

        public function getJadwalByCabor() {
            $cabor = ucwords($this->input->get("cabor"));
            $kategori = ucwords($this->input->get("kategori"));

            $result = $this->Lomba->jadwalByCabor($cabor, $kategori);

            echo json_encode($result);
        }

        public function updateKeterangan() {
            $data = array( "KETERANGAN" => $this->input->post("keterangan"));
            $where = array ( "ID_JADWAL" => $this->input->post("id"));
			$res=$this->Lomba->updateKeterangan($data, $where);
            echo json_encode($result);
        }

        public function getKategori() {
            $cabor = ucwords($this->input->get("cabor"));

            $result = $this->Peserta->dataKategori($cabor);

            echo json_encode($result);
        }

        public function getJadwalAll() {
            $result = $this->Lomba->getJadwalAll();

            echo json_encode($result);
        }

        public function getHasilPertandingan() {
            $cabor = ucwords($this->input->get('cabor'));
            $kategori = ucwords($this->input->get('kategori'));

            $result = $this->Lomba->hasilPertandingan($cabor,$kategori);

            echo json_encode($result);
        }

        public function setJadwal() {
            $namaJadwal = $this->input->post("nama_jadwal");
            $cabor = strtoupper($this->input->post("nama_cabor"));
            $kategori = $this->input->post("kategori_cabor");
            $inputWaktu = date_create($this->input->post("waktu"));
            $waktu = date_format($inputWaktu, "Y-m-d H:i:s");
            $venue = $this->input->post('venue');
            $fakultas1 = strtoupper($this->input->post('fakultas1'));
            $fakultas2 = strtoupper($this->input->post('fakultas2'));

            $result = $this->Lomba->setJadwal($namaJadwal, $cabor, $kategori, $waktu, $venue, $fakultas1, $fakultas2);
            
            echo json_encode($result);

        }

        public function deleteJadwal() {
            $idJadwal = $this->input->post("id_jadwal");

            $result = $this->Lomba->deleteJadwalByID($idJadwal);

            echo json_encode($result);
        }

        public function setHasilPertandingan() {
            $idJadwal = $this->input->post('id_jadwal');
            $inputTimAll = $this->input->post('id_tim');
            $inputSkorAll = $this->input->post('skor');
            $inputUrutanAll = $this->input->post('urutan');
            $hasil = $this->input->post('hasil');

            $result = $this->Lomba->setHasilPertandingan($idJadwal, $inputTimAll, $inputSkorAll, $inputUrutanAll, $hasil);

            echo json_encode($result);
        }
        
        public function Kategori(){
            $cabor= strtoupper($this->input->get('cabor'));
            $result = $this->Peserta->dataKategori($cabor);
            echo json_encode($result);
        }

    }
    
?>