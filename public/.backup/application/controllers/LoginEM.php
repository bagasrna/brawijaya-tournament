<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();
class LoginEM extends CI_Controller {
	public $xml="hello";
	public function __construct()
	{
		session_start();
		parent::__construct();
		$this->load->model('M_staffmuda');
		// $this->load->library('session');
	}

	public function index(){
		$this->load->view('login/index');
	}

	public function admin(){
		$this->load->view('staffmuda/v_loginadmin');
	}

	public function aksi_admin(){
	$nim = $this->input->post('nim');
	$pass = $this->input->post('password');
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

	$_SESSION["nim"] = $nim;
	$_SESSION["nama"] = "".$this->getData("NAMA");
	$_SESSION["fak"] =$this->getData("JENJANG")."/".$this->getData("FAKULTAS");
	$_SESSION["njurusan"] ="".$this->getData("JURUSAN");
	$_SESSION["prodi"] ="".$this->getData("PRODI");
	$cek = false;
	if ($pass == 1 && $berhak == 1){
		$cek = true;
		redirect('admin');
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
	else{
		?>
		<script language="JavaScript">
			alert('Hanya Untuk Angkatan 2017 dan 2018');
			document.location='javascript:history.back(1)';
		</script>
		<?php
	}
}

	public function aksi_login(){
		$nim = $this->input->post('nim');
		$pass = $this->input->post('password');
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
		$_SESSION["nim"] = $nim;
		$_SESSION["nama"] = "".$this->getData("NAMA");
		$_SESSION["fak"] =$this->getData("JENJANG")."/".$this->getData("FAKULTAS");
		$_SESSION["njurusan"] ="".$this->getData("JURUSAN");
		$_SESSION["prodi"] ="".$this->getData("PRODI");
		$_SESSION['timeout'] = time()+60*60*2;
		$cek = false;
		if ($pass == 1 && $berhak == 1){
			$cek = true;
			redirect('staffmuda');
		}
		else if ($cek==false) { 
			$t=time();
			$log= array(
				'nim'	=>$_SESSION["nim"],
				'nama_lengkap'	=>$_SESSION["nama"],
				'fakultas'	=>$_SESSION["fak"].'|'.$_SESSION["njurusan"].'|'.$_SESSION["prodi"],
				'url'	=>"gagal_login",
			);
			$ciduk= $this->M_staffmuda->insertData('log_login', $log);
			session_destroy(); 

			?>
			<script language="JavaScript">
				alert('Maaf,nim atau password anda salah!...');
				document.location='javascript:history.back(1)';
			</script>
			<?php
		}
		else{
			?>
			<script language="JavaScript">
				alert('Hanya Untuk Angkatan 2017 dan 2018');
				document.location='javascript:history.back(1)';
			</script>
			<?php
		}
	}

	function getData($str){
		return $this->xml->CONTENT->USER->$str;
	}


	public function logout(){
		session_destroy();
		redirect('login/admin');
	}
}
