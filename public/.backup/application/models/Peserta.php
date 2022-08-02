<?php
    class Peserta extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function DataPeserta($nim) {
            $query = $this->db
                            ->select('NIM_PESERTA, NAMA_PESERTA, NAMA_FAKULTAS, NAMA_CABOR, KATEGORI_CABOR')
                            ->from('peserta p')
                            ->join('tim t', 'p.ID_TIM=t.ID_TIM', 'inner')
                            ->join('cabor c', 't.ID_CABOR=c.ID_CABOR', 'inner')
                            ->join('fakultas f', 't.ID_FAKULTAS=f.ID_FAKULTAS', 'inner')
                            ->where('p.NIM_PESERTA', $nim);
            $result = $this->db->get()->result();
            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }

            else {
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $result;
            }

            return $res;
        }

        public function DataPesertaAll() {
            $query = $this->db
                            ->select('NIM_PESERTA, NAMA_PESERTA, NAMA_FAKULTAS, NAMA_CABOR, KATEGORI_CABOR')
                            ->from('peserta p')
                            ->join('tim t', 'p.ID_TIM=t.ID_TIM', 'inner')
                            ->join('cabor c', 't.ID_CABOR=c.ID_CABOR', 'inner')
                            ->join('fakultas f', 't.ID_FAKULTAS=f.ID_FAKULTAS', 'inner');
            $result = $this->db->get()->result();
            
            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }

            else {
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $result;
            }

            return $res;
        }

        public function DataTimAll() {
            $query = $this->db
                            ->select('ID_TIM, NAMA_FAKULTAS, NAMA_CABOR, KATEGORI_CABOR')
                            ->from('tim t')
                            ->join('cabor c', 't.ID_CABOR=c.ID_CABOR', 'inner')
                            ->join('fakultas f', 't.ID_FAKULTAS=f.ID_FAKULTAS', 'inner');

            $result = $query->get()->result();

            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }

            else {
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $result;
            }

            return $res;
        }

        public function DataTimByID($idFakultas, $idCabor, $kategori) {
            $query = $this->db
                            ->select('ID_TIM, NAMA_FAKULTAS, NAMA_CABOR, KATEGORI_CABOR')
                            ->from('tim t')
                            ->join('cabor c', 't.ID_CABOR=c.ID_CABOR', 'inner')
                            ->join('fakultas f', 't.ID_FAKULTAS=f.ID_FAKULTAS', 'inner')
                            ->where('f.ID_FAKULTAS', $idFakultas)
                            ->where('c.ID_CABOR', $idCabor)
                            ->where('KATEGORI_CABOR', $kategori);

            $result = $this->db->get()->result();

            return $result;
        }

        public function DataTimByNama($namaFakultas, $namaCabor, $kategori) {
            $query = $this->db
                            ->select('ID_TIM, NAMA_FAKULTAS, NAMA_CABOR, KATEGORI_CABOR')
                            ->from('tim t')
                            ->join('cabor c', 't.ID_CABOR=c.ID_CABOR', 'inner')
                            ->join('fakultas f', 't.ID_FAKULTAS=f.ID_FAKULTAS', 'inner')
                            ->where('f.NAMA_FAKULTAS', $namaFakultas)
                            ->where('c.NAMA_CABOR', $namaCabor)
                            ->where('c.KATEGORI_CABOR', $kategori);

            $result = $this->db->get()->result();

            return $result;
        }
        
        public function DataTim($fakultas, $cabor, $kategori) {
            $query = $this->db
                            ->select('ID_TIM, NAMA_FAKULTAS, NAMA_CABOR, KATEGORI_CABOR')
                            ->from('tim t')
                            ->join('cabor c', 't.ID_CABOR=c.ID_CABOR', 'inner')
                            ->join('fakultas f', 't.ID_FAKULTAS=f.ID_FAKULTAS', 'inner')
                            ->where('NAMA_FAKULTAS', $fakultas)
                            ->where('NAMA_CABOR', $cabor)
                            ->where('KATEGORI_CABOR', $kategori);

            $result = $this->db->get()->result();

            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }
            else {
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $result;
            }

            return $res;
        }

        public function DataFakultas() {
            $query = $this->db->get('fakultas');
            $result = $query->result();

            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }

            else {
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $result;
            }

            return $res;
        }

        public function DataCabor() {
            $query = $this->db->get('cabor');
            $result = $query->result();

            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }

            else {
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $result;
            }

            return $res;
        }

        
        public function dataKategori($cabor) {
            $query = $this->db->where("NAMA_CABOR", $cabor)->get('cabor');
            $result = $query->result();

            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }

            else {
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $result;
            }

            return $res;
        }

        public function idCaborByKategori($cabor, $kategori) {
            $query = $this->db->select('ID_CABOR')->where("NAMA_CABOR", $cabor)->where("KATEGORI_CABOR", $kategori)->get('cabor');
            $result = $query->result();

            return $result;
        }

        public function idFakultas() {
            $query = $this->db->get('fakultas');
            $result = $query->result();

            return $result;
        }

        public function idFakultasByName($fakultas) {
            $query = $this->db->select('ID_FAKULTAS')->where('NAMA_FAKULTAS', $fakultas)->get('fakultas');
            $result = $query->result();

            return $result;
        }
    }
    
?>