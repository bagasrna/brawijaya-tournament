<?php
    class Klasemen extends CI_Model {
        public function __construct() {
            $this->load->database();
            $this->load->model('Peserta');
            $this->load->model('Klasemen');
        }

        public function setMedali($inputCabor, $inputFakultas, $inputKategori, $inputMedali) {
            $dataFakultas = explode("~", $inputFakultas);
            $dataMedali = explode("~", $inputMedali);

            for ($i=0; $i < sizeof($dataFakultas); $i++) { 
                $data[$i] = array(
                    "NAMA_FAKULTAS" => $dataFakultas[$i],
                    "PEROLEHAN_MEDALI" => $dataMedali[$i]
                );
            }

            foreach ($data as $val) {
                $dataPeserta = $this->Peserta->DataTimByNama($val["NAMA_FAKULTAS"], $inputCabor, $inputKategori);

                foreach($dataPeserta as $key) {
                    $idTim = $key->ID_TIM;
                }
                
                $query = $this->db
                                    ->select('count(T.ID_CABOR) AS `JUMLAH`')
                                    ->from('tim T')
                                    ->join('cabor C', 'T.ID_CABOR = C.ID_CABOR', 'inner')
                                    ->where('C.NAMA_CABOR', $inputCabor)
                                    ->where('C.KATEGORI_CABOR', $inputKategori)
                                    ->where('T.PEROLEHAN_MEDALI', "");

                $dataPerolehan = $query->get()->result();

                foreach ($dataPerolehan as $key) {
                    $jumlah = $key->JUMLAH;
                }
                                                      
                if ($jumlah < 15) {
                    $res['status'] = false;
                    $res['message'] = "Data sudah Ada";
                }
                else {
                    $this->db->where('ID_TIM', $idTim);
                    $query = $this->db->update('tim', array('PEROLEHAN_MEDALI' => $val["PEROLEHAN_MEDALI"]));
                    
                    $queryFak = $this->db->select('ID_FAKULTAS')->where('NAMA_FAKULTAS', $val["NAMA_FAKULTAS"])->get('fakultas');
                    $dataIdFakultas = $queryFak->result();

                    foreach ($dataIdFakultas as $key) {
                        $idFakultas = $key->ID_FAKULTAS;
                    }

                    if ($query) {
                        $perolehanFakultas = $this->Klasemen->getMedali($idFakultas);
                        if($val["PEROLEHAN_MEDALI"] == 'EMAS') {
                            foreach ($perolehanFakultas as $key) {
                                $totalGold = $key->PEROLEHAN_EMAS;
                            }
                            
                            $this->db->where('ID_FAKULTAS', $idFakultas);
                            $query = $this->db->update('hasil_klasemen', array('PEROLEHAN_EMAS' => ++$totalGold));
                        }     
                        else if ($val["PEROLEHAN_MEDALI"] == 'PERAK') {
                            foreach ($perolehanFakultas as $key) {
                                $totalSilver = $key->PEROLEHAN_PERAK;
                            }

                            $this->db->where('ID_FAKULTAS', $idFakultas);
                            $query = $this->db->update('hasil_klasemen', array('PEROLEHAN_PERAK' => ++$totalSilver));
                        }
                        else if ($val["PEROLEHAN_MEDALI"] == 'PERUNGGU') {
                            foreach ($perolehanFakultas as $key) {
                                $totalBronze = $key->PEROLEHAN_PERUNGGU;
                            }

                            $this->db->where('ID_FAKULTAS', $idFakultas);
                            $query = $this->db->update('hasil_klasemen', array('PEROLEHAN_PERUNGGU' => ++$totalBronze));
                        }          


                        $res['status'] = true;
                        $res['message'] = 'Data berhasil dimasukkan';
                    }
                    else {
                        $res['status'] = false;
                        $res['message'] = 'Data tidak berhasil dimasukkan';
                    }
                }

                
            }
            
            return $res;
            
        }

        public function getMedali($idFakultas) {
            $query = $this->db->where('ID_FAKULTAS', $idFakultas)->get('hasil_klasemen');
            $result = $query->result();

            return $result;
        }

        public function getMedaliAll() {
            $query = $this->db
                            ->select('f.ID_FAKULTAS, f.NAMA_FAKULTAS, h.PEROLEHAN_EMAS, h.PEROLEHAN_PERAK, h.PEROLEHAN_PERUNGGU')
                            ->from('hasil_klasemen h')
                            ->join('fakultas f', 'h.ID_FAKULTAS=f.ID_FAKULTAS', 'inner')
                            ->order_by('h.PEROLEHAN_EMAS DESC')
                            ->order_by('h.PEROLEHAN_PERAK DESC')
                            ->order_by('h.PEROLEHAN_PERUNGGU DESC');
            
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

        public function getMedaliFakultas($idFakultas) {
            
            $query = $this->db
                            ->select('DISTINCT(NAMA_CABOR), f.ID_FAKULTAS, f.NAMA_FAKULTAS, (SELECT COUNT(*) 
                                                                    FROM tim ts 
                                                                    JOIN cabor cs 
                                                                    ON ts.ID_CABOR = cs.ID_CABOR 
                                                                    JOIN fakultas fs
                                                                    ON ts.ID_FAKULTAS = fs.ID_FAKULTAS
                                                                    WHERE cs.NAMA_CABOR = c.NAMA_CABOR 
                                                                    AND fs.NAMA_FAKULTAS = f.NAMA_FAKULTAS
                                                                    AND ts.PEROLEHAN_MEDALI = "EMAS" ) 
                                                                    as PEROLEHAN_EMAS, 
                                                                 (SELECT COUNT(*) 
                                                                    FROM tim ts 
                                                                    JOIN cabor cs 
                                                                    ON ts.ID_CABOR = cs.ID_CABOR 
                                                                    JOIN fakultas fs
                                                                    ON ts.ID_FAKULTAS = fs.ID_FAKULTAS
                                                                    WHERE cs.NAMA_CABOR = c.NAMA_CABOR 
                                                                    AND fs.NAMA_FAKULTAS = f.NAMA_FAKULTAS
                                                                    AND ts.PEROLEHAN_MEDALI = "PERAK" ) 
                                                                    as PEROLEHAN_PERAK,
                                                                 (SELECT COUNT(*) 
                                                                    FROM tim ts 
                                                                    JOIN cabor cs 
                                                                    ON ts.ID_CABOR = cs.ID_CABOR 
                                                                    JOIN fakultas fs
                                                                    ON ts.ID_FAKULTAS = fs.ID_FAKULTAS
                                                                    WHERE cs.NAMA_CABOR = c.NAMA_CABOR 
                                                                    AND fs.NAMA_FAKULTAS = f.NAMA_FAKULTAS
                                                                    AND ts.PEROLEHAN_MEDALI = "PERUNGGU" ) 
                                                                    as PEROLEHAN_PERUNGGU') 
                            ->from('tim t')
                            ->join('cabor c', 't.ID_CABOR=c.ID_CABOR', 'inner')
                            ->join('fakultas f', 't.ID_FAKULTAS=f.ID_FAKULTAS', 'inner')
                            ->where('f.ID_FAKULTAS', $idFakultas);
            

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
    }
    
?>