<?php
    class M_presensi extends CI_Model {
        public function __construct() {
            $this->load->database();
            $this->load->model('Peserta');
        }

        public function isiPresensi($nim) {
            $dataPeserta = $this->Peserta->DataPeserta($nim);
            if ($dataPeserta["status"]==false) {
                $data['status'] = 'BUKAN KONTINGEN';
            }
            else {
                $data['status'] = 'KONTINGEN';
            }
            return $data;
        }

        public function input($data){
            $query = $this->db->insert('presensi', $data);
            if ($query) {
                $res['status'] = true;
                $res['message'] = 'Data Berhasil Ditambahkan';
            }
            else {
                $res['status'] = false;
                $res['message'] = 'Data Tidak Berhasil Ditambahkan';
            }
        }

        public function delete($id){
            $this->db->delete('presensi', array('id' => $id));
        }

        public function lihatPresensi($idAcara) {
            $this->db->order_by('FAKULTAS')->where('ID_ACARA', $idAcara);
            $result = $this->db->get('presensi')->result();
            $this->db->where('ID_ACARA', $idAcara);
            $acara = $this->db->get('acara')->result();
            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
                $res['acara'] = $acara;
            }
            else {
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $result;
                $res['acara'] = $acara;
            }

            return $res;
        }

        //tambahan dari gue (untuk yg ngisi form NIM, masih gagal ini)
        public function addPresensi($namaPresensi, $nimPresensi, $fakultasPre) {
            $presensi = array(
                'NAMA_PESERTA' => $namaPresensi,
                'NIM_PESERTA' => $nimPresensi,
                'FAKULTAS' => $fakultasPre
            );

            $query = $this->db->insert('presensi', $presensi);
            
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
    }
    
?>