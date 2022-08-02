<?php
    class Panitia extends CI_Model {
        public function __construct() {
            $this->load->database();
        }
        public function getPanitia($id) {
            $result = $this->db->where('nim', $id)->get('tb_panitia')->result_array();

            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }
            else {
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data']= $result;
            }

            return $res;
        }

        public function getPanitiaAll() {
            $result = $this->db->order_by('DATA_ENROLL', 'DESC')->get('panitia')->result_array();
            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }
            else {
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data']= $result;
            }

            return $res;
        }

        public function getEnroll($id) {
            $result = $this->db->where('ENROLL_KEY', $id)->get('panitia')->result_array();

            if (empty($result) || is_null($result)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }
            else {
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data']= $result;
            }

            return $res;
        }

        public function inputEnroll($data) {
            $query = $this->db->insert('pengguna', $data);
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

        public function checkNim($id){
            $result = $this->db->where('NIM_PENGGUNA', $id)->get('pengguna')->result_array();
            if (empty($result) || is_null($result)) {
                $res['status'] = true;
                $res['message'] = 'Data berhasil ditambahkan';
            }
            else {
                $res['status'] = false;
                $res['message'] = 'Data gagal ditambahkan';
            }
            return $res;
        }

        public function updateDataEnroll($id,$jmlEnroll){
            $data=array('DATA_ENROLL'=> $jmlEnroll);
            $this->db->where('ENROLL_KEY',$id);
            $query=$this->db->update('panitia',$data);
            if ($query) {
                $res['status'] = true;
                $res['message'] = 'Data berhasil diubah';
            }
            else {
                $res['status'] = false;
                $res['message'] = 'Data tidak berhasil diubah';
            }

            return $res;
        }
    }
