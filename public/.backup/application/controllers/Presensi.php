<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Presensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Acara');
        $this->load->model('M_presensi');
    }


    public function buat($idAcara)
    {
        $result = $this->Acara->getAcara($idAcara);
        if ($result['status'] == true) {
            $data = $result;
            // var_dump($data);
            $this->load->view('presensi/a_home', $data);
        } else {
            $message = $result['message'];
            echo "<script type='text/javascript'>alert('$message');</script>";
            show_404();
        }
    }

    public function isi()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = new DateTime();
        $idAcara = $this->input->post('id_acara');
        $data = array(
            "NIM_PESERTA" => $this->input->post('nim'),
            "NAMA_PESERTA" => $this->input->post('nama'),
            "FAKULTAS" => $this->input->post('fakultas'),
            "STATUS" => $this->input->post('status'),
            "ID_ACARA" => $this->input->post('id_acara'),
            "WAKTU" => $now->format('H:i:s')
        );
        $res = $this->M_presensi->input($data);
        redirect(base_url() . 'presensi/buat/' . $idAcara);
    }

    public function checkData()
    {
        $nim = $this->input->post('nim');
        //$nim=16515040111106;
        $data = $this->M_presensi->isiPresensi($nim);
        // var_dump($data);
        $url =  "https://rajabrawijaya.ub.ac.id/labina/getinfo/khan.php?nim=" . $nim;
        $file = file_get_contents($url);
        $data["data"] = json_decode($file, true);
        // var_dump($data);
        if ($data["data"]["nim"] == " ") {
            // echo "NOTHING";
            ?>
            <script language="JavaScript">
                alert('Maaf, NIM tidak tercatat pada SIAM');
                document.location = 'javascript:history.back(1)';
            </script>
<?php
        } else {
            $data["data"]["id_acara"] = $this->input->post('id_acara');
            $data["data"]["nama_acara"] = $this->input->post('nama_acara');
            //		header('Content-Type: application/json');
            //	echo json_encode($data);
            $this->load->view('presensi/a_welcome', $data);
        }
    }

    public function deleteAcara($id)
    {
        $this->Acara->deleteAcara($id);
        redirect('DataAcara/daftarLaman');
    }
}

?>