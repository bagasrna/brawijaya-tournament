<?php
    class DataPanitia extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Panitia');
        }

        public function CariDataPanitia() {
            $nim = $this->input->post('nim');

            $res = $this->Panitia->DataPanitia($nim);

            echo json_encode($res);
        }

        public function CariAllPanitia() {
            $res = $this->Panitia->DataPanitiaAll();

            echo json_encode($res);
        }

        public function dataEnrollPanitia() {
            $enrollKey = $this->input->post('enroll_key');

            $res = $this->Panitia->enrollPanitia($enrollKey);

            echo json_encode($res);
        }

        public function enrollKey() {
            $nim= $this->input->get('nim');
            $nama= $this->input->get('nama');
            $key= $this->input->get('key');
            $res=$this->Panitia->checkNIM($nim);
            if($res['status']==true){
                $res = $this->Panitia->getEnroll($key);
                if($res['status']==true){
                    $data = array ( 'NIM_PENGGUNA' => $nim ,
                                    'NAMA_PENGGUNA' => $nama,
                                    'ENROLL_KEY' => $key);
                                    
                    $res['data'][0]['DATA_ENROLL']++;
                    $this->Panitia->updateDataEnroll($res['data'][0]['ENROLL_KEY'],$res['data'][0]['DATA_ENROLL']);
                    $res = $this->Panitia->inputEnroll($data);
                 }
            }
            echo json_encode($res);
        }
    }
    
?>