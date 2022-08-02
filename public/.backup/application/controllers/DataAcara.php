<?php
    class DataAcara extends CI_Controller  {
        public function __construct() {
            parent::__construct();
            if($_SESSION["hak"]>2 || !isset($_SESSION["hak"])){
                redirect('login/siketob');
            }else{
            $this->load->helper('url');
            $this->load->model('Acara');
            $this->load->model('M_presensi');
            $this->load->helper('text');
            }
        }

        public function index(){
            $data = $this->Acara->getAcaraAll();
            $this->load->view('presensi/index',$data);
        }

        public function sidebar(){
            $data = $this->Acara->getAcaraAll();
            return $this->load->view('presensi/sidebar.php',$data,true);
        }

        public function inputAcara() {
            $data = array(
                "sidebar" => $this->sidebar()
            );
            $this->load->view('presensi/tambah_presensi',$data);
        }

        public function detail($idAcara){
            $data = array("sidebar" => $this->sidebar());
            $result = $this->M_presensi->lihatPresensi($idAcara);
            if ($result['status'] == true) {
                $data["data"] = $result;
                $this->load->view('presensi/presensi_apps',$data);
            }
            else {
                $message = $result['message'];
                $data["status"]= $result['status'];
                $data["data"]= $result;
                $this->load->view('presensi/presensi_apps',$data);
            }
        }

        public function deleteId($id,$idAcara){
            $this->M_presensi->delete($id);
            redirect(base_url()."DataAcara/detail/$idAcara");
        }
        public function daftarLaman(){
            $data = array(
                "sidebar" => $this->sidebar()
            );
            $data["data"] = $this->Acara->getAcaraAll();
            $this->load->view('presensi/daftar_laman_presensi',$data);
        }

        public function setAcara() {
            $namaAcara = $this->input->post('nama_acara');
            $tanggal = $this->input->post('tanggal_acara');
            $tempat = $this->input->post('tempat_acara');
            $result = $this->Acara->addAcara($namaAcara, $tanggal, $tempat);

             if ($result['status'] == false) {
                 $message = $result['message'];
                 echo "<script type='text/javascript'>alert('$message');</script>";
             }
             else {
                 redirect(base_url().'DataAcara/inputAcara');
             }
        }

        public function getAcara($id='') {
            $result = $this->Acara->getAcara($id);
            $this->load->view('presensi/daftar_laman_presensi', $result);
        }

        public function deleteAcara($id) {            
            $result= $this->Acara->deleteAcara($id);
				// header('Content-Type: application/json');
				// echo json_encode($result);
            redirect(base_url().'DataAcara/daftarLaman');
        }

        public function login() {          
            $this->load->view('presensi/login');
        }
        

    }
    
?>