<?php
    class Talent extends CI_Model{
        public function __construct() {
            $this->load->database();
        }

        public function addTalent($data){
            $query = $this->db->insert('open_talent_ketua', $data);

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