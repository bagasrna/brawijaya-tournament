<?php
    class DataBerita extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->model('Berita');
        }

        public function getDataBeritaAll() {
            $result = $this->Berita->beritaAll();

            echo json_encode($result);
        }
        
        public function getDataBerita() {
            $idBerita = $this->input->get('id_berita');

            $result = $this->Berita->getBerita($idBerita);

            echo json_encode($result);
        }

        public function getDataKomentar() {
            $idBerita = $this->input->get("id_berita");

            $result = $this->Berita->getKomentar($idBerita);

            echo json_encode($result);
        }

        public function setDataKomentar() {
            $idBerita = $this->input->get("id_berita");

            $namaPengguna = $this->input->get("nama_pengguna");
            $komentarPengguna = $this->input->get("komentar_pengguna");

            $result = $this->Berita->setKomentar($idBerita, $namaPengguna, $komentarPengguna);
            
            echo json_encode($result);
        }
        
        public function setDataBerita() {
            $judul = $this->input->post("judul_berita");
            $konten = $this->input->post("konten_berita");

            $dir = "upload/FotoBerita";

            $config['upload_path']   = $dir; 
            $config['allowed_types'] = 'gif|jpg|png'; 
            $config['max_size']      = 100;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_berita')) {
                $foto = $this->upload->file_name;
                $fotoBerita = base_url() . $dir . '/' . $foto;
            }
            else {
                $fotoBerita = base_url() . $dir . '/not_available.jpg';
            }
            
            // if($_FILES['foto_berita']['tmp_name']) {
               
            // }
            // else {
            //     $fotoBerita = './upload' . $dir . '/not_available.jpg';
            // }

            // echo $judul . " + " . $konten . " + " . $fotoBerita;

            //$result = $this->Berita->postBerita($judul, $konten, $fotoBerita);

            $result = $this->Berita->postBerita($judul, $konten);
            echo json_encode($result);
        }

        public function deleteBerita(){
            $id = $this->input->post("id");
            $result = $this->Berita->deleteBerita($id);
            echo json_encode($result);
        }
    }
    
?>