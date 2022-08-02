<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Login extends CI_Controller {
	public $xml="hello";
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Panitia');
	}

	public function index(){
		$this->load->view('obapps/index');
	}

	function getData($str){
		return $this->xml->CONTENT->USER->$str;
	}

	public function ayo_login(){
		$nim = $this->input->post('nim');
		$pass = $this->input->post('password');
		$password = md5('123ab'.$pass).'_'.$nim;
		$ip = $_SERVER['REMOTE_ADDR'];
		$url_login = 'https://em.ub.ac.id/redirect/login/loginApps/?nim='.$nim.'&password='.$password;
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url_login,
			CURLOPT_SSL_VERIFYPEER=>FALSE,
		));
		$resp = curl_exec($curl);
		$xml = simplexml_load_string($resp);
		$this->xml= $xml;
		$pass = $xml->CONTENT->AUTHORITY->PASSWD ;
		$berhak = $xml->CONTENT->AUTHORITY->BERHAK ;
		curl_close($curl);

		$_SESSION["nim"] = $nim;
		$_SESSION["nama"] = "".$this->getData("NAMA");
		$_SESSION["fak"] =$this->getData("JENJANG")."/".$this->getData("FAKULTAS");
		$_SESSION["njurusan"] ="".$this->getData("JURUSAN");
		$_SESSION["prodi"] ="".$this->getData("PRODI");
		$cek = false;
		if ($pass == 1 && $berhak == 1){
			$cek = true;
			redirect(base_url().'obapps/berita/');
		}
		else if ($cek==false) { 
			session_destroy(); 
			?>
			<script language="JavaScript">
				alert('Maaf,nim atau password anda salah!...');
				document.location='javascript:history.back(1)';
			</script>
			<?php
		}
	}

	public function loginApps(){
		$nim = $this->input->get('nim');
		$pass = $this->input->get('password');
		$password = md5('123ab'.$pass).'_'.$nim;
		$ip = $_SERVER['REMOTE_ADDR'];
		$url_login = 'https://api.bais.ub.ac.id/login.php/?userid='.$nim.'&passport='.$password.'&challenge=123ab&appid=EKS2&ipaddr='.$ip;
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url_login,
			CURLOPT_SSL_VERIFYPEER=>FALSE,
		));
		$resp = curl_exec($curl);
		$xml = simplexml_load_string($resp);
		$this->xml= $xml;
		$pass = $xml->CONTENT->AUTHORITY->PASSWD ;
		$berhak = $xml->CONTENT->AUTHORITY->BERHAK ;
		curl_close($curl);
		$cek = false;
		if ($pass == 1 && $berhak == 1){
			$data["status"]=true;
			$data["nim"] = $nim;
			$data["nama"] = "".$this->getData("NAMA");
			$data["fak"] ="".$this->getData("FAKULTAS");
			$data["foto"]= "http://siakad.ub.ac.id/siam/biodata.fotobynim.php?nim=$nim&key=MzIxZm90b3V5ZTEyMysyMDE4LTA4LTIxIDIxOjA2OjAw";
			$data['enroll']=false;
			$res=$this->Panitia->checkNIM($nim);
            if($res['status']==true){
				$data['enroll']=true;
			}
			echo json_encode($data);
		}
		else if ($cek==false) {
			$data["status"]=false;
			echo json_encode($data);
		}		
	}

	public function admin(){
		$nim = $this->input->get('nim');
		$pass = $this->input->get('password');
		$password = md5('123ab'.$pass).'_'.$nim;
		$ip = $_SERVER['REMOTE_ADDR'];
		$url_login = 'https://api.bais.ub.ac.id/login.php/?userid='.$nim.'&passport='.$password.'&challenge=123ab&appid=EKS2&ipaddr='.$ip;
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url_login,
			CURLOPT_SSL_VERIFYPEER=>FALSE,
		));
		$resp = curl_exec($curl);
		$xml = simplexml_load_string($resp);
		$this->xml= $xml;
		$pass = $xml->CONTENT->AUTHORITY->PASSWD ;
		$berhak = $xml->CONTENT->AUTHORITY->BERHAK ;
		curl_close($curl);
		$cek = false;
		$res = $this->Panitia->getPanitia($nim);
		$data["status"]='false';
		if ($pass == 1 && $berhak == 1){
			if($res['data'][0]['ADMIN']<=3){
				$data["status"]='true';
				$data["nim"] = $nim;
				$data["nama"] = "".$this->getData("NAMA");
				$data["fak"] ="".$this->getData("FAKULTAS");
			}
			echo json_encode($data);
		}
		else if ($cek==false) {
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
		// $nim=165150401111060;
		// $pass='ghanyersa2';
		$password = md5('123ab'.$pass).'_'.$nim;
		$ip = $_SERVER['REMOTE_ADDR'];
		$url_login = 'https://api.bais.ub.ac.id/login.php/?userid='.$nim.'&passport='.$password.'&challenge=123ab&appid=EKS2&ipaddr='.$ip;
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url_login,
			CURLOPT_SSL_VERIFYPEER=>FALSE,
		));
		$resp = curl_exec($curl);
		$xml = simplexml_load_string($resp);
		$this->xml= $xml;
		$pass = $xml->CONTENT->AUTHORITY->PASSWD ;
		$berhak = $xml->CONTENT->AUTHORITY->BERHAK ;
		curl_close($curl);
		$cek = false;
		$res = $this->Panitia->getPanitia($nim);
		if ($pass == 1 && $berhak == 1){
			if($res['data'][0]['ADMIN']<=2){
				$cek = true;
				$_SESSION["nim"] = $nim;
				$_SESSION["hak"] = $res['data'][0]['ADMIN'];
				$_SESSION["nama"] = $res['data'][0]['NAMA_PANITIA'];
				// header('Content-Type: application/json');
				// echo json_encode($res);
				redirect(base_url().'DataAcara/');
			}else{
				session_destroy(); 
				?>
				<script language="JavaScript">
					alert('Maaf,anda tidak terdaftar sebagai admin SI KETOB');
					document.location='javascript:history.back(1)';
				</script>
				<?php
			}
		}else{ 
			session_destroy(); 
			?>
			<script language="JavaScript">
		 		alert('Maaf,nim atau password anda salah!...');
		 		document.location='javascript:history.back(1)';
			</script>
		<?php
		}		
	}

	public function logout(){
		session_destroy();
		redirect(base_url().'login/');
	}
	public function logoutKetob(){
		session_destroy();
		redirect(base_url().'login/siketob');
	}
}