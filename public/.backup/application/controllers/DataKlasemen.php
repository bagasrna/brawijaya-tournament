<?php
    class DataKlasemen extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Klasemen');
        }   

        public function setDataKlasemen() {
            $inputCabor = $this->input->post('cabor');
            $inputKategori = $this->input->post('kategori');

            $inputFakultas = $this->input->post('fakultas');
            $inputMedali = $this->input->post('medali');

            $res = $this->Klasemen->setMedali($inputCabor, $inputFakultas, $inputKategori, $inputMedali);
            
            echo json_encode($res);
        }
        

        public function getKlasemenAll() {
            $res = $this->Klasemen->getMedaliAll();

            echo json_encode($res);
        }

        public function getKlasemenByFakultas() {
            $idFakultas = $this->input->get('fakultas');

            $res = $this->Klasemen->getMedaliFakultas($idFakultas);

            echo json_encode($res);
        }
    }
?>