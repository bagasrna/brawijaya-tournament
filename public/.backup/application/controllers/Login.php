<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
	public $xml = "hello";
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Panitia');
	}

	public function index()
	{
		$this->load->view('obapps/index');
	}

	function getData($str)
	{
		return $this->xml->CONTENT->USER->$str;
	}

	public function ayo_login()
	{
		$nim = $this->input->post('nim');
		$pass = $this->input->post('password');

		$dt = "https://em.ub.ac.id/redirect/login/loginApps/?nim=" . $nim . "&password=" . $pass;
		$data = file_get_contents($dt);
		$dataMhs = json_decode($data);
		// $password = md5('123ab'.$pass).'_'.$nim;
		// $ip = $_SERVER['REMOTE_ADDR'];
		// $url_login = 'https://api.bais.ub.ac.id/login.php/?userid='.$nim.'&passport='.$password.'&challenge=123ab&appid=EKS2&ipaddr='.$ip;
		// $curl = curl_init();
		// curl_setopt_array($curl, array(
		// 	CURLOPT_RETURNTRANSFER => 1,
		// 	CURLOPT_URL => $url_login,
		// 	CURLOPT_SSL_VERIFYPEER=>FALSE,
		// ));
		// $resp = curl_exec($curl);
		// $xml = simplexml_load_string($resp);
		// $this->xml= $xml;
		// $pass = $xml->CONTENT->AUTHORITY->PASSWD ;
		// $berhak = $xml->CONTENT->AUTHORITY->BERHAK ;
		// curl_close($curl);

		// $_SESSION["nim"] = $nim;
		// $_SESSION["nama"] = "".$this->getData("NAMA");
		// $_SESSION["fak"] =$this->getData("JENJANG")."/".$this->getData("FAKULTAS");
		// $_SESSION["njurusan"] ="".$this->getData("JURUSAN");
		// $_SESSION["prodi"] ="".$this->getData("PRODI");
		// $cek = false;
		if ($dataMhs->status) {
			$_SESSION['nim'] = $nim;
			$_SESSION['nama'] = $dataMhs->nama;
			$_SESSION['fak'] = "FILKOM";
			$_SESSION['foto'] = $dataMhs->foto;
			$_SESSION['log'] = true;
			redirect(base_url('obapps/berita/'));
		} else {
			// session_destroy(); 
			?>
			<script language="JavaScript">
				alert('Maaf,nim atau password anda salah!...');
				document.location = 'javascript:history.back(1)';
			</script>
			<?php
		}
	}

	public function loginApps(){
		$nim = $this->input->get('nim');
		$pass = $this->input->get('password');
					// $password = md5('123ab'.$pass).'_'.$nim;
					// $ip = $_SERVER['REMOTE_ADDR'];
		$dt = 'https://em.ub.ac.id/redirect/login/loginApps/?nim=' . $nim . '&password=' . $pass;
		$datas = file_get_contents($dt);
		$dataMhs = json_decode($datas);
					// $curl = curl_init();
					// curl_setopt_array($curl, array(
					// 	CURLOPT_RETURNTRANSFER => 1,
					// 	CURLOPT_URL => $url_login,
					// 	CURLOPT_SSL_VERIFYPEER=>FALSE,
					// ));
					// $resp = curl_exec($curl);
					// $xml = simplexml_load_string($resp);
					// $this->xml= $xml;
					// $pass = $xml->CONTENT->AUTHORITY->PASSWD ;
					// $berhak = $xml->CONTENT->AUTHORITY->BERHAK ;
					// curl_close($curl);
					// $cek = false;
			if ($dataMhs->status==true) {
				$data["status"] = true;
				$data["nim"] = $nim;
				$data["nama"] = $dataMhs->nama; 
				// $this->getData("NAMA");
				$data["fak"] = $dataMhs->fak;
				// $this->getData("FAKULTAS");
				$data["foto"] = "http://siakad.ub.ac.id/siam/biodata.fotobynim.php?nim=$nim&key=MzIxZm90b3V5ZTEyMysyMDE4LTA4LTIxIDIxOjA2OjAw";
				$data['enroll'] = false;
				$res = $this->Panitia->checkNIM($nim);
				if($res['status']==true){
					$data['enroll']=true;
				}
				echo json_encode($data);
			}
			else if ($dataMhs->status==false) {
				$data["status"]=false;
				echo json_encode($data);
			}
	}

	public function admin(){
		$nim = $this->input->get('nim');
		$pass = $this->input->get('password');
		$dt = "https://em.ub.ac.id/redirect/login/loginApps/?nim=" . $nim . "&password=" . $pass;
		$datas = file_get_contents($dt);
		$dataMhs = json_decode($datas);

					// $_SESSION['nim'] = $nim;
					// $_SESSION['nama'] = $dataMhs->nama;
					// $_SESSION['fak'] = $dataMhs->fak;
					// $_SESSION['foto'] = $dataMhs->foto;
					// $password = md5('123ab'.$pass).'_'.$nim;
					// $ip = $_SERVER['REMOTE_ADDR'];
					// $url_login = 'https://api.bais.ub.ac.id/login.php/?userid='.$nim.'&passport='.$password.'&challenge=123ab&appid=EKS2&ipaddr='.$ip;
					// $curl = curl_init();
					// curl_setopt_array($curl, array(
					// 	CURLOPT_RETURNTRANSFER => 1,
					// 	CURLOPT_URL => $url_login,
					// 	CURLOPT_SSL_VERIFYPEER=>FALSE,
					// ));
					// $resp = curl_exec($curl);
					// $xml = simplexml_load_string($resp);
					// $this->xml= $xml;
					// $pass = $xml->CONTENT->AUTHORITY->PASSWD ;
					// $berhak = $xml->CONTENT->AUTHORITY->BERHAK ;
					// curl_close($curl);
					// $cek = false;
					$res = $this->Panitia->getPanitia($nim);
					$data["status"] = false;
					if ($dataMhs->status) {
						if ($res['data'][0]['admin'] <= 3) {
							$data["status"] = true;
							$data["nim"] = $nim;
							$data["nama"] = $dataMhs->nama;
							$data["fak"] = $dataMhs->fak;
						}
						echo json_encode($data);
					} else {
						echo json_encode($data);
					}
				}

				// SIKETOB
	public function siketob(){
		$this->load->view('presensi/login');
	}
	public function loginKetob(){
		$nim = $this->input->post('nim');
		$pass = $this->input->post('password');
		$dt = "https://em.ub.ac.id/redirect/login/loginApps/?nim=" . $nim . "&password=" . $pass;
		$data = file_get_contents($dt);
		$dataMhs = json_decode($data);

		$_SESSION['nim'] = $nim;
		$_SESSION['nama'] = $dataMhs->nama;
		$_SESSION['fak'] = $dataMhs->fak;
		$_SESSION['foto'] = $dataMhs->foto;
					// $nim=165150401111060;
					// $pass='ghanyersa2';
					// $password = md5('123ab'.$pass).'_'.$nim;
					// $ip = $_SERVER['REMOTE_ADDR'];
					// $url_login = 'https://api.bais.ub.ac.id/login.php/?userid='.$nim.'&passport='.$password.'&challenge=123ab&appid=EKS2&ipaddr='.$ip;
					// $curl = curl_init();
					// curl_setopt_array($curl, array(
					// 	CURLOPT_RETURNTRANSFER => 1,
					// 	CURLOPT_URL => $url_login,
					// 	CURLOPT_SSL_VERIFYPEER=>FALSE,
					// ));
					// $resp = curl_exec($curl);
					// $xml = simplexml_load_string($resp);
					// $this->xml= $xml;
					// $pass = $xml->CONTENT->AUTHORITY->PASSWD ;
					// $berhak = $xml->CONTENT->AUTHORITY->BERHAK ;
					// curl_close($curl);
					// $cek = false;
		$res = $this->Panitia->getPanitia($nim);
			if ($dataMhs->status) {
				if ($res['data'][0]['ADMIN'] <= 2) {
							// $cek = true;
					$_SESSION["nim"] = $nim;
					$_SESSION["hak"] = $res['data'][0]['admin'];
					$_SESSION["nama"] = $res['data'][0]['nama'];
							// header('Content-Type: application/json');
							// echo json_encode($res);
					redirect(base_url() . 'DataAcara/');
				} else {
					session_destroy();
					?>
					<script language="JavaScript">
						alert('Maaf,anda tidak terdaftar sebagai admin SI KETOB');
						document.location = 'javascript:history.back(1)';
					</script>
					<?php
				}
				} else {
	session_destroy();
	?>
		<script language="JavaScript">
			alert('Maaf,nim atau password anda salah!...');
			document.location = 'javascript:history.back(1)';
		</script>
	<?php
		}
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url() . 'login/');
	}
	public function logoutKetob()
	{
		session_destroy();
		redirect(base_url() . 'login/siketob');
	}
}
