<?php
    class Lomba extends CI_Model {
        public function __construct() {
            $this->load->database();
            $this->load->model('Lomba');
            $this->load->model('Peserta');
        }
        
        // public function updateKeterangan($data,$where){
        //     $result= $this->db->update('berita',$data,$where);
        //     if ($result) {
        //         $res['status'] = true;
        //         $res['message'] = 'Data berhasil diubah';
        //         $res['data'] = $result;
        //     }
        //     else {
        //         $res['status'] = false;
        //         $res['message'] = 'Data tidak berhasil diubah';
        //     }
        //     return $res;
        // }

        public function jadwalByWaktu($waktuJadwal) {
            $data = array();
            $jadwal = $this->Lomba->cariJadwalWaktu($waktuJadwal);

            foreach ($jadwal as $key) {
                $idJadwal = $key->ID_JADWAL;

                $query = $this->db
                                ->select('J.ID_JADWAL, F.ID_FAKULTAS, F.NAMA_FAKULTAS, C.NAMA_CABOR, C.KATEGORI_CABOR, C.JENIS_PERTANDINGAN, J.WAKTU, J.NAMA_JADWAL, J.VENUE, TB.SKOR')
                                ->from('tim_bertanding TB')
                                ->join('jadwal J', 'TB.ID_JADWAL = J.ID_JADWAL', 'inner')
                                ->join('cabor C', 'J.ID_CABOR = C.ID_CABOR', 'inner')
                                ->join('tim T', 'TB.ID_TIM = T.ID_TIM', 'inner')
                                ->join('fakultas F','T.ID_FAKULTAS = F.ID_FAKULTAS', 'inner')
                                ->where('TB.ID_JADWAL', $idJadwal)
                                ->order_by('J.WAKTU ASC');
                $result = $this->db->get()->result();
                
                $dataArr = array();

                if (!empty($result)) {
                    $i = 1;
                    foreach ($result as $key) {
                        if (empty($dataArr || is_null($dataArr))) {
                            foreach ($key as $keys => $val) {
                                $dataArr[$keys] = $val;
                            }
                        }    
                        else {
                            $dataArr["ID_FAKULTAS$i"] = $key->ID_FAKULTAS;
                            $dataArr["NAMA_FAKULTAS$i"] = $key->NAMA_FAKULTAS;
                            $dataArr["SKOR$i"] = $key->SKOR;
                        }
                        $i++;
                    }
                    $data[] = $dataArr;                    
                }


            }

            if (empty($data) || is_null($data)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }
            else {
            
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $data;
            }
            
            return $res;
        }

        public function jadwalByFakultas($fakultas) {
            $data = array();
            $jadwal = $this->Lomba->cariJadwalFakultas($fakultas);
            
            foreach ($jadwal as $key) {
                $idJadwal = $key->ID_JADWAL;

                $query = $this->db
                                ->select('J.ID_JADWAL, J.NAMA_JADWAL, F.ID_FAKULTAS, F.NAMA_FAKULTAS, C.NAMA_CABOR, C.KATEGORI_CABOR, C.JENIS_PERTANDINGAN, J.WAKTU, J.NAMA_JADWAL, J.VENUE, TB.SKOR')
                                ->from('tim_bertanding TB')
                                ->join('jadwal J', 'TB.ID_JADWAL = J.ID_JADWAL', 'inner')
                                ->join('cabor C', 'J.ID_CABOR = C.ID_CABOR', 'inner')
                                ->join('tim T', 'TB.ID_TIM = T.ID_TIM', 'inner')
                                ->join('fakultas F','T.ID_FAKULTAS = F.ID_FAKULTAS', 'inner')
                                ->where('TB.ID_JADWAL', $idJadwal)
                                ->order_by('J.WAKTU ASC');
                $result = $this->db->get()->result();
                
                $dataArr = array();

                if (!empty($result)) {
                    $i = 1;
                    foreach ($result as $key) {
                        if (empty($dataArr || is_null($dataArr))) {
                            foreach ($key as $keys => $val) {
                                $dataArr[$keys] = $val;
                            }
                        }    
                        else {
                            $dataArr["ID_FAKULTAS$i"] = $key->ID_FAKULTAS;
                            $dataArr["NAMA_FAKULTAS$i"] = $key->NAMA_FAKULTAS;
                            $dataArr["SKOR$i"] = $key->SKOR;
                        }
                        $i++;
                    }
                    $data[] = $dataArr;                    
                }


            }

            if (empty($data) || is_null($data)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }
            else {
            
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $data;
            }
            
            return $res;
        }

        public function jadwalByCabor($cabor, $kategoriCabor) {
            $data = array();
            $jadwal = $this->Lomba->cariJadwalCabor($cabor, $kategoriCabor);
            
            foreach ($jadwal as $key) {
                $idJadwal = $key->ID_JADWAL;

                $query = $this->db
                                ->select('J.ID_JADWAL, J.NAMA_JADWAL, F.ID_FAKULTAS, TB.ID_TIM, F.NAMA_FAKULTAS, C.NAMA_CABOR, C.KATEGORI_CABOR, C.JENIS_PERTANDINGAN, J.WAKTU, J.VENUE, TB.SKOR')
                                ->from('tim_bertanding TB')
                                ->join('jadwal J', 'TB.ID_JADWAL = J.ID_JADWAL', 'inner')
                                ->join('cabor C', 'J.ID_CABOR = C.ID_CABOR', 'inner')
                                ->join('tim T', 'TB.ID_TIM = T.ID_TIM', 'inner')
                                ->join('fakultas F','T.ID_FAKULTAS = F.ID_FAKULTAS', 'inner')
                                ->where('TB.ID_JADWAL', $idJadwal)
                                ->order_by('J.WAKTU ASC');
                $result = $this->db->get()->result();
                
                $dataArr = array();

                if (!empty($result)) {
                    $i = 1;
                    foreach ($result as $key) {
                        if (empty($dataArr || is_null($dataArr))) {
                            foreach ($key as $keys => $val) {
                                $dataArr[$keys] = $val;
                            }
                        }    
                        else {
                            $dataArr["ID_TIM$i"] = $key->ID_TIM;
                            $dataArr["ID_FAKULTAS$i"] = $key->ID_FAKULTAS;
                            $dataArr["NAMA_FAKULTAS$i"] = $key->NAMA_FAKULTAS;
                            $dataArr["SKOR$i"] = $key->SKOR;
                        }
                        $i++;
                    }
                    $data[] = $dataArr;                    
                }


            }

            if (empty($data) || is_null($data)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }
            else {
            
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $data;
            }
            
            return $res;
        }

        public function hasilPertandingan($cabor, $kategori) {
            $data = array();
            $jadwal = $this->Lomba->cariHasilPertandingan($cabor, $kategori);
            
            foreach ($jadwal as $key) {
                $idJadwal = $key->ID_JADWAL;

                $query = $this->db
                                ->select('J.ID_JADWAL, J.NAMA_JADWAL, F.ID_FAKULTAS, F.NAMA_FAKULTAS, C.NAMA_CABOR, C.KATEGORI_CABOR, C.JENIS_PERTANDINGAN, J.WAKTU, J.VENUE, TB.SKOR, TB.URUTAN, J.HASIL')
                                ->from('tim_bertanding TB')
                                ->join('jadwal J', 'TB.ID_JADWAL = J.ID_JADWAL', 'inner')
                                ->join('cabor C', 'J.ID_CABOR = C.ID_CABOR', 'inner')
                                ->join('tim T', 'TB.ID_TIM = T.ID_TIM', 'inner')
                                ->join('fakultas F','T.ID_FAKULTAS = F.ID_FAKULTAS', 'inner')
                                ->where('TB.ID_JADWAL', $idJadwal)
                                ->where('J.KETERANGAN', "SELESAI")
                                ->order_by('TB.URUTAN');
                $result = $this->db->get()->result();

                
                
                $dataArr = array();

                if (!empty($result)) {
                    $i = 1;
                    foreach ($result as $key) {
                        if (empty($dataArr || is_null($dataArr))) {
                            foreach ($key as $keys => $val) {
                                $dataArr[$keys] = $val;
                            }
                        }    
                        else {
                            $dataArr["NAMA_FAKULTAS$i"] = $key->NAMA_FAKULTAS;
                            $dataArr["SKOR$i"] = $key->SKOR;
                            $dataArr["URUTAN$i"] = $key->URUTAN;
                        }
                        $i++;
                    }
                    $data[] = $dataArr;                    
                }
            }

            if (empty($data) || is_null($data)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }
            else {
            
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $data;
            }
            
            return $res;
        }

        public function cariJadwalWaktu($waktuJadwal) {
            $query = $this->db
                            ->select('J.ID_JADWAL')
                            ->from('jadwal J')
                            ->like('WAKTU', $waktuJadwal, 'after')
                            ->order_by('J.WAKTU ASC');
            $res = $this->db->get()->result();
            return $res;
        }

        public function cariJadwalCabor($cabor, $kategoriCabor) {
            $query = $this->db
                            ->select('J.ID_JADWAL')
                            ->from('jadwal J')
                            ->join('cabor C', 'J.ID_CABOR = C.ID_CABOR')
                            ->where('C.NAMA_CABOR', $cabor)
                            ->where('C.KATEGORI_CABOR', $kategoriCabor);
            $res = $this->db->get()->result();

        
            return $res;
        }
        
        public function cariHasilPertandingan($cabor, $kategoriCabor) {
            $query = $this->db
                            ->select('J.ID_JADWAL')
                            ->from('jadwal J')
                            ->join('cabor C', 'J.ID_CABOR = C.ID_CABOR')
                            ->where('C.NAMA_CABOR', $cabor)
                            ->where('C.KATEGORI_CABOR', $kategoriCabor)
                            ->where('J.KETERANGAN', "SELESAI");
            $res = $this->db->get()->result();
            // var_dump($res);

        
            return $res;
        }

        public function cariJadwalFakultas($fakultas) {
            $query = $this->db
                            ->select('TB.ID_JADWAL')
                            ->from('tim_bertanding TB')
                            ->join('tim T', 'TB.ID_TIM = T.ID_TIM', 'inner')
                            ->join('fakultas F', 'T.ID_FAKULTAS = F.ID_FAKULTAS', 'inner')
                            ->join('jadwal J', 'TB.ID_JADWAL = J.ID_JADWAL', 'inner')
                            ->where('F.NAMA_FAKULTAS', $fakultas);
            $res = $this->db->get()->result();

            return $res;
        }

        public function cariJadwalAll() {

            $query = $this->db
                            ->select('J.ID_JADWAL')
                            ->from('jadwal J');
            $res = $this->db->get()->result();
            return $res;
        }

        public function getJadwalAll() {

            $data = array();
            
            $jadwal = $this->Lomba->cariJadwalAll();
            
            foreach ($jadwal as $key) {
                $idJadwal = $key->ID_JADWAL;

                $query = $this->db
                                ->select('J.ID_JADWAL, J.NAMA_JADWAL, F.ID_FAKULTAS, TB.ID_TIM, F.NAMA_FAKULTAS, C.NAMA_CABOR, C.KATEGORI_CABOR, C.JENIS_PERTANDINGAN, J.WAKTU, J.VENUE, TB.SKOR, J.KETERANGAN')
                                ->from('tim_bertanding TB')
                                ->join('jadwal J', 'TB.ID_JADWAL = J.ID_JADWAL', 'inner')
                                ->join('cabor C', 'J.ID_CABOR = C.ID_CABOR', 'inner')
                                ->join('tim T', 'TB.ID_TIM = T.ID_TIM', 'inner')
                                ->join('fakultas F','T.ID_FAKULTAS = F.ID_FAKULTAS', 'inner')
                                ->where('J.ID_JADWAL', $idJadwal)
                                ->where('J.KETERANGAN', 'BELUM MULAI')
                                ->order_by('J.WAKTU ASC');
                $result = $this->db->get()->result();

                $dataArr = array();

                if (!empty($result)) {
                    $i = 1;
                    foreach ($result as $key) {
                        if (empty($dataArr || is_null($dataArr))) {
                            foreach ($key as $keys => $val) {
                                $dataArr[$keys] = $val;
                            }
                        }    
                        else {
                            $dataArr["ID_TIM$i"] = $key->ID_TIM;
                            $dataArr["NAMA_FAKULTAS$i"] = $key->NAMA_FAKULTAS;
                            $dataArr["SKOR$i"] = $key->SKOR;
                        }
                        $i++;
                    }
                    $data[] = $dataArr;                    
                }
            }

            if (empty($data) || is_null($data)) {
                $res['status'] = false;
                $res['message'] = 'Data tidak ditemukan';
            }
            else {
            
                $res['status'] = true;
                $res['message'] = 'Data ditemukan';
                $res['data'] = $data;
            }
            
            return $res;
        }

        public function setJadwal($namaJadwal, $cabor, $kategori, $waktu, $venue, $fakultas1, $fakultas2) {
            $dataCabor = $this->Peserta->idCaborByKategori($cabor, $kategori);
            
            foreach ($dataCabor as $key) {
                $idCabor = $key->ID_CABOR;
            }
            
            $dataJadwal = array(
                "NAMA_JADWAL" => $namaJadwal,
                "ID_CABOR" => $idCabor,
                "WAKTU" => $waktu,
                "VENUE" => $venue,
                "KETERANGAN" => "BELUM MULAI"
            );

            $query = $this->db->insert('jadwal', $dataJadwal);

            $dataJadwal = $this->db->select('ID_JADWAL')->from('jadwal')->where('NAMA_JADWAL', $namaJadwal)->where('ID_CABOR', $idCabor);
            $resultJadwal = $this->db->get()->result();

            foreach ($resultJadwal as $key) {
                $idJadwal = $key->ID_JADWAL;
            }
                
            if ($fakultas1 == "ALL" && $fakultas2 == "ALL") {
                $dataFakultas = $this->Peserta->idFakultas();

                foreach ($dataFakultas as $key) {
                    $idFakultas = $key->ID_FAKULTAS;

                    $dataPeserta = $this->Peserta->DataTimByID($idFakultas, $idCabor, $kategori);

                    foreach($dataPeserta as $key) {
                        $idTim = $key->ID_TIM;
                    }

                    // return $idFakultas;

                    $dataTimBertanding = array(
                        "ID_JADWAL" => $idJadwal,
                        "ID_TIM" => $idTim
                    );

                    $query = $this->db->insert('tim_bertanding', $dataTimBertanding);
                }
            }
            else {
                // $dataFakultas1 = $this->Peserta->idFakultasByName($fakultas1);

                // foreach ($dataFakultas1 as $key) {
                //     $idFakultas1 = $key->ID_FAKULTAS;
                // }

                // $dataFakultas2 = $this->Peserta->idFakultasByName($fakultas2);

                // foreach ($dataFakultas2 as $key) {
                //     $idFakultas2 = $key->ID_FAKULTAS;
                // }

                $fakultas = array($fakultas1, $fakultas2);

                foreach ($fakultas as $key) {
                    $dataFakultas = $this->Peserta->idFakultasByName($key);

                    foreach ($dataFakultas as $key) {
                        $idFakultas = $key->ID_FAKULTAS;
                    }

                    $dataPeserta = $this->Peserta->DataTimByID($idFakultas, $idCabor, $kategori);
    
                    foreach($dataPeserta as $key) {
                        $idTim = $key->ID_TIM;
                    }
    
                    $dataTimBertanding = array(
                        "ID_JADWAL" => $idJadwal,
                        "ID_TIM" => $idTim
                    );
    
                    $query = $this->db->insert('tim_bertanding', $dataTimBertanding);
                }
            }
            
            if ($query) {
                $res['status'] = true;
                $res['message'] = 'Data berhasil ditambahkan';
            }
            else {
                $res['status'] = false;
                $res['message'] = 'Data tidak berhasil ditambahkan';
            }

            return $res;
        }

        public function deleteJadwalByID($idJadwal) {
            $query = $this->db->where('ID_JADWAL', $idJadwal)->delete('jadwal');

            if ($query) {
                $res['status'] = true;
                $res['message'] = 'Data berhasil dihapus';
            }
            else {
                $res['status'] = false;
                $res['message'] = 'Data tidak berhasil ditambahkan';
            }

            return $res;
        }

        public function setHasilPertandingan($idJadwal, $inputTimAll, $inputSkorAll, $inputUrutanAll, $hasil) {
            $dataHasilJadwal = array(
                "KETERANGAN" => "SELESAI",
                "HASIL" => $hasil
            );
            $updateJadwal = $this->db->where('ID_JADWAL', $idJadwal)->update('jadwal', $dataHasilJadwal);
            
            $timAll = explode('~', $inputTimAll);
            $skorAll = explode('~', $inputSkorAll);
            $urutanAll = explode('~', $inputUrutanAll);

            for ($i=0; $i < count($timAll); $i++) { 
                $dataTim[$i] = array(
                    "ID_TIM" => $timAll[$i], 
                    "SKOR" => $skorAll[$i], 
                    "URUTAN" => (int) $urutanAll[$i]
                );
            }

            // print_r($inputTimAll);
            // print_r($inputSkorAll);
            // print_r($inputUrutanAll);
            // print_r($dataTim);
            
            // $dataTim = array(array("ID_TIM" => $idTim1, "SKOR" => $skor1, "URUTAN" => $urutan1), array("ID_TIM" => $idTim2, "SKOR" => $skor2, "URUTAN" => $urutan2));

            foreach ($dataTim as $key) {
                $dataHasilTim = array(
                    'SKOR' => $key["SKOR"],
                    'URUTAN' => $key["URUTAN"] 
                );
                $query = $this->db
                                ->where("ID_JADWAL", $idJadwal)
                                ->where("ID_TIM", $key["ID_TIM"])
                                ->update("tim_bertanding", $dataHasilTim);
            }

            if ($query) {
                $res['status'] = true;
                $res['message'] = 'Data berhasil ditambahkan';
            }
            else {
                $res['status'] = false;
                $res['message'] = 'Data tidak berhasil ditambahkan';
            }

            return $res;
        }

        public function getKategori($cabor) {
            $query = $this->db
                            ->select('KATEGORI_CABOR')
                            ->from('cabor')
                            ->where('NAMA_CABOR', $cabor);
            $res = $this->db->get()->result();
            return $res;
        }
    }
?>