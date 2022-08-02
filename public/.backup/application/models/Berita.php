<?php
    class Berita extends CI_Model {
        public function __construct() {
            $this->load->database();
            $this->load->model('Berita');
        }
        function jumlah_data(){
            return $this->db->get('berita')->num_rows();
        }
        function data($number,$offset){
            $this->db->order_by('WAKTU_BERITA', 'DESC');
            return $query = $this->db->get('berita',$number,$offset)->result();		
        }

        public function beritaAll() {
            $this->db->order_by('WAKTU_BERITA', 'DESC');
            $query = $this->db->get("berita");
            $result = $query->result();

            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak Ditemukan';
            }
            else {
                $res['status'] = true;
                $res['message'] = 'Data Ditemukan';
                $res['data'] = $result;
            }
            return $res;
        }

        public function getBerita($idBerita) {
            $query = $this->db->where('ID_BERITA', $idBerita);
            $result = $query->get('berita')->result();
            
            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak Ditemukan';
            }
            else {
                $res['status'] = true;
                $res['message'] = 'Data Ditemukan';
                $res['data'] = $result;
            }
            return $res;
        }

        public function getKomentar($idBerita) {
            $query = $this->db->select('*')->where('ID_BERITA', $idBerita)->get("komentar");
            $result = $query->result();
            
            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak Ditemukan';
            }
            else {
                $res['status'] = true;
                $res['message'] = 'Data Ditemukan';
                $res['data'] = $result;
            }
            return $res;
        }

        public function setKomentar($idBerita, $pengguna, $komentarPengguna) {
            $dataKomentar = array(
                "ID_BERITA" => $idBerita,
                "NAMA_PENGGUNA" => $pengguna,
                "KOMENTAR_PENGGUNA" => $komentarPengguna
            );

            $query = $this->db->insert('komentar', $dataKomentar);

            if ($query) {
                $komentarBerita = $this->getKomentar($idBerita);

                $res['status'] = true;
                $res['message'] = 'Data Berhasil Ditambahkan';
                $res['data'] = $komentarBerita;
            }
            else {
                $res['status'] = false;
                $res['message'] = 'Data Tidak Berhasil Ditambahkan';
            }

            return $res;
        }

        public function postBerita($judul, $konten) {
            $dataBerita = array(
                "JUDUL_BERITA" => $judul,
                "ISI_BERITA" => $konten
                // "FOTO_BERITA" => $gambar
            );
            $query = $this->db->insert('berita', $dataBerita);

            if ($query) {
                $res['status'] = true;
                $res['message'] = 'Data Berhasil Ditambahkan';
            }
            else {
                $res['status'] = false;
                $res['message'] = 'Data Tidak Berhasil Ditambahkan';
            }

            return $res;
        }
        
        public function deleteBerita($id) {
            $query = $this->db->delete('berita', array('ID_BERITA' => $id));
            
            if ($query) {
                $res['status'] = true;
                $res['message'] = 'Data berhasil dihapus';
            }
            else {
                $res['status'] = false;
                $res['message'] = 'Data tidak berhasil dihapus';
            }

            return $res;
        }
    }
?>