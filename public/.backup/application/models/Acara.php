<?php
    class Acara extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function addAcara($namaAcara, $tanggal, $tempat) {
            $acara = array(
                'NAMA_ACARA' => $namaAcara,
                'TANGGAL_ACARA' => $tanggal,
                'TEMPAT_ACARA' => $tempat
            );

            $query = $this->db->insert('acara', $acara);
            
            if ($query) {
                $res['status'] = true;
                $res['message'] = 'Data berhasil ditambahkan';
            }
            else {
                $res['status'] = false;
                $res['message'] = 'Data gagal ditambahkan';
            }
            return $res;
        }

        public function getAcara($id) {
            $result = $this->db->where('ID_ACARA', $id)->get('acara')->result();

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

        public function getAcaraAll() {
            $result = $this->db->order_by('TANGGAL_ACARA')->get('acara')->result();

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

        public function editAcara($acara) {
            $query = $this->db->replace('acara', $acara);

            if ($query) {
                $res['status'] = true;
                $res['message'] = 'Data berhasil diubah';
                $res['data'] = $acara;
            }
            else {
                $res['status'] = false;
                $res['message'] = 'Data tidak berhasil diubah';
            }

            return $res;
        }

        public function deleteAcara($id) {
            $query = $this->db->delete('acara', array('ID_ACARA' => $id));
            
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