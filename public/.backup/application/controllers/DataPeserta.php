<?php
    class DataPeserta extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Peserta');
        }

        public function getDataPeserta() {
            $nim = $this->input->get("nim");

            $result = $this->Peserta->DataPeserta($nim);
            echo json_encode($result);
        }

        public function getDataTim() {
            $result = $this->Peserta->DataTimAll();

            echo json_encode($result);
        }

        public function getDataTimByFakultasCabor() {
            $fakultas = strtoupper($this->input->get("fakultas"));
            $cabor = ucwords($this->input->get("cabor"));
            $kategori = ucwords($this->input->get("kategori"));

            $result = $this->Peserta->DataTim($fakultas, $cabor, $kategori);
            
            echo json_encode($result);
        }

        public function getDataFakultas() {
            $result = $this->Peserta->DataFakultas();

            echo json_encode($result);
        }

        public function getDataCabor() {
            $result = $this->Peserta->DataCabor();

            echo json_encode($result);
        }
    }
    
?>