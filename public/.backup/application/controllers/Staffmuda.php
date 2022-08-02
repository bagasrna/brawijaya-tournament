<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Staffmuda extends CI_Controller {
	private $statusnya="belum";
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_staffmuda');
		// TES
		$_SESSION["nim"] = "165150207111058";
		$_SESSION["nama"] = "NAMAKU";
		$_SESSION["fak"] = "FILKOM";
		$_SESSION["njurusan"] ="TIF";
		$_SESSION["prodi"] ="TIF";

		//log
		// if (isset($_SESSION["nim"])){
			// $this->checking($_SESSION["nim"]);
			// $t=time();
			// $log= array(
			// 	'nim'	=>$_SESSION["nim"],
			// 	'nama_lengkap'	=>$_SESSION["nama"],
			// 	'fakultas'	=>$_SESSION["fak"].'|'.$_SESSION["njurusan"].'|'.$_SESSION["prodi"],
			// 	'url'	=>$_SERVER['REQUEST_URI'],
				// 'time'	=>date("Y-m-d|H:i",$t),
			// );
			// $ciduk= $this->M_staffmuda->insertData('log_login', $log);
		// }
		// else{
		// 	session_destroy(); 
		// 		redirect('login');
		// 	}
		//log

	}
	
	public function form(){
		$this->load->view('oprec/index');
	}
	public function checking($nim){
		$data = $this->M_staffmuda->getX("nim",'oprecstaff',"where nim = '$nim'");
		foreach ($data as $hm) {
			if($hm["nim"]==$nim){
				$this->statusnya ="sudah";
			}}
		}

		public function index(){
			// if (isset($_SESSION["nim"])){
				if($this->statusnya=="belum"){
					$this->load->view('staffmuda/v_beranda');
				}else if($this->statusnya=="sudah"){
					$data= $this->M_staffmuda->getX("*",'oprecstaff' ,"where nim= '$_SESSION[nim]'");
					$this->load->view('staffmuda/tunggu',array('data'=>$data));
				}
			// }else{
			// 	redirect('login');
			// }
		}

		public function login(){
			redirect('login');
		}

		public function kementerian($kementerian="kosong"){
			// if (isset($_SESSION["nim"])){
				switch($kementerian){
					case "adkes":
					$this->load->view('staffmuda/adkes');
					break;
					case "adkeu":
					$this->load->view('staffmuda/adkeu');
					break;
					case "advokesma":
					$this->load->view('staffmuda/advokesma');
					break;
					case "bm":
					$this->load->view('staffmuda/bm');
					break;
					case "dalugri":
					$this->load->view('staffmuda/dalugri');
					break;
					case "jakpus":
					$this->load->view('staffmuda/jakpus');
					break;
					case "jakwilnas":
					$this->load->view('staffmuda/jakwilnas');
					break;
					case "lh":
					$this->load->view('staffmuda/lh');
					break;
					case "pora":
					$this->load->view('staffmuda/pora');
					break;
					case "psdm":
					$this->load->view('staffmuda/psdm');
					break;
					case "puskominfo":
					$this->load->view('staffmuda/puskominfo');
					break;
					case "sosma":
					$this->load->view('staffmuda/sosma');
					break;
					case "spi":
					$this->load->view('staffmuda/spi');
					break;
					case "kosong":
					$this->load->view('staffmuda/v_kementerian');
					break;
					default:
					$this->load->view('staffmuda/v_kementerian');

				}
			// }else{
			// 	redirect('login');
			// }
		}

		public function formulir(){
			// redirect('staffmuda');
			// if (isset($_SESSION["nim"])&&(substr($_SESSION["nim"], 0,2)==18
			// 	||substr($_SESSION["nim"], 0,2)==17)
			// 	||$_SESSION["nim"]==165150207111058//nim danang
			// ){
			// 	if($this->statusnya=="belum"){
			// 		$_SESSION['timeout'] = time()+60*60*2;//jika ngisi form, kita kasih waktu lagi untuk timeout
					$this->load->view('staffmuda/v_formulir');
			// 	}else if($this->statusnya=="sudah"){
			// 	// $data= $this->M_staffmuda->getX("*",'oprecstaff' ,"where nim= '$_SESSION[nim]'");
			// 	// $this->load->view('staffmuda/v_formuliredit',array('data'=>$data));
			// 		redirect('staffmuda');
			// 	}
			// }else if(isset($_SESSION["nim"])){
			// 	echo "<script language='JavaScript'>
			// 	alert('OPREC STAFF MUDA Hanya Untuk Angkatan 2017 dan 2018');
			// 	document.location='javascript:history.back(1)';
			// </script>";
			// }else{
			// 	redirect('login');
			// }
		}


		private function r($value){
			$search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
			$replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");
			if (is_null($value)) {
				return "-";
			}
			return str_replace($search, $replace, $value);
		}

		function getStr($str){
			$result="";
			if (isset($str)) {
				$c=0;
				foreach ($str as $key) {
					$result.= $key;
					if ($c!=sizeof($str)-1){
						$result.= "~";
					}
					$c++;
				}
			} else {
			}
			return $result;
		}

		public function delete(){
			$where = array (
				"nim" => $_SESSION['nim']
			);
			$res= $this->M_staffmuda->deleteData('oprecstaff', $where);
			if($res>=1){
				redirect('staffmuda');
			}else{
				echo "<h2>Gagal Dilakukan</h2>";
			}
		}

		public function isiForm(){
			if (isset($_SESSION["nim"])){
			// if(isset($_POST["token"])){
				$daftar = array(
					'divisi1'	=>$this->r($_POST["pilihan1"]),
					'alasan1'	=>$this->r($_POST["alasan1"]),
					'divisi2'	=>$this->r($_POST["pilihan2"]),
					'alasan2'	=>$this->r($_POST["alasan2"]),
					'motivasi'	=>$this->r($_POST["alasan3"])
				);
				$inputan= array(
					'nim'	=>$this->r($_SESSION["nim"]),
					'nama_lengkap'	=>$this->r($_SESSION["nama"]),
					'nama_panggilan'	=>$this->r($_POST["panggilan"]),
					'fakultas'	=>$this->r($_SESSION["fak"].'/'.$_SESSION["njurusan"].'/'.$_SESSION["prodi"]),
					// 'jenis_kelamin'	=>$this->r($_POST["jenis_kelamin"]),
					// 'ipk'	=>$this->r($_POST["ipk"]),
					'ttl'	=>$this->r("$_POST[tempat]. $_POST[tl] "),
					'alamat_asal'	=>$this->r($_POST["asal"]),
					'alamat_malang'	=>$this->r($_POST["malang"]),
					'telp'	=>$this->r($_POST["hp"]),
					'email'	=>$this->r($_POST["email"]),
					'line'	=>$this->r($_POST["line"]),
					'hobi'	=>$this->r($_POST["hobi"]),
					'motto'	=>$this->r($_POST["motto"]),
					'cita'	=>$this->r($_POST["cita"]),
					'fasilitas'	=>$this->r(implode("~",$_POST["fasilitas"])),
					'jaringan'	=>$this->r(implode("~",$_POST["jaringan"])),
					'keahlian'	=>$this->r(implode("~",$_POST["keahlian"])),

					// 'inovasi'	=>$this->r($_POST["inovasi"]),
					'jenjang_formal'	=>$this->r($this->getStr($_POST["jenjang_pf"])),
					'namainstitusi_formal'	=>$this->r($this->getStr($_POST["instansi_pf"])),
					'tahun_formal'	=>$this->r($this->getStr($_POST["tahun_pf"])),
					'jenjang_non'	=>$this->r($this->getStr($_POST["jenjang_pnf"])),
					'namainstitusi_non'	=>$this->r($this->getStr($_POST["instansi_pnf"])),
					'tahun_non'	=>$this->r($this->getStr($_POST["tahun_pnf"])),
					'namaorg_pengalaman'	=>$this->r($this->getStr($_POST["jabatan_po"])),
					'jabatanorg_pengalaman'	=>$this->r($this->getStr($_POST["instansi_po"])),
					'tahunorg_pengalaman'	=>$this->r($this->getStr($_POST["tahun_po"])),
					'namaorg_ikut'	=>$this->r($this->getStr($_POST["jabatan_sd"])),
					'jabatanorg_ikut'	=>$this->r($this->getStr($_POST["instansi_sd"])),
					'tahunorg_ikut'	=>$this->r($this->getStr($_POST["tahun_sd"])),
					'jabatankep_pengalaman'	=>$this->r($this->getStr($_POST["jabatan_pk"])),
					'namakep_pengalaman'	=>$this->r($this->getStr($_POST["instansi_pk"])),
					'tahunkep_pengalaman'	=>$this->r($this->getStr($_POST["tahun_pk"])),
					'namakep_ikut'	=>$this->r($this->getStr($_POST["instansi_ad"])),
					'jabatankep_ikut'	=>$this->r($this->getStr($_POST["jabatan_ad"])),
					'tahunkep_ikut'	=>$this->r($this->getStr($_POST["tahun_ad"])),
					'tingkatP'	=>$this->r($this->getStr($_POST["tingkat_p"])),
					'prestasi'	=>$this->r($this->getStr($_POST["prestasi_p"])),
					'tahunP'	=>$this->r($this->getStr($_POST["tahun_p"])),
					// 'keterangan'	=>$this->r($_POST["form"]),
				);
				$res= $this->M_staffmuda->insertData('oprecstaff', $inputan);
				if($res>=1){
				// $this->session->set_userdata('NIM', $_SESSION['nim']);
					redirect('staffmuda');
				}else{
					echo "<h2>Gagal Dimasukkan</h2>";
				}
			// }
			// else{
			// 	redirect('login');
			// }
			}else{
				redirect('login');
			}
		}

	// public function editForm(){
	// 	if (isset($_SESSION["nim"])||($_SESSION['timeout'] < time())){
	// 		if($this->statusnya=="belum"){
	// 			$this->load->view('staffmuda/v_beranda');
	// 		}else if($this->statusnya=="sudah"){
	// 		}
	// 	}else{
	// 		redirect('login');
	// 	}
	// }

		public function updateForm()
		{
			if (isset($_SESSION["nim"])){
				$updatean = array(
					"nim" => $this->r($_POST["nim"]),
					"pilihan" => $this->r($_POST["pilihan"]),
					'nama'	=>$this->r($_POST["nama"]),
					'panggilan'	=>$this->r($_POST["panggilan"]),
					'jenis_kelamin'	=>$this->r($_POST["jenis_kelamin"]),
					'fakultas'	=>$this->r($_POST["fakultas"]),
					'ipk'	=>$this->r($_POST["ipk"]),
					'ttl'	=>$this->r($_POST["ttl"]),
					'alamat_asal'	=>$this->r($_POST["alamat_asal"]),
					'alamat_malang'	=>$this->r($_POST["alamat_malang"]),
					'telp'	=>$this->r($_POST["telp"]),
					'email'	=>$this->r($_POST["email"]),
					'sosmed'	=>$this->r($_POST["sosmed"]),
					'hobi'	=>$this->r($_POST["hobi"]),
					'motto'	=>$this->r($_POST["motto"]),
					'fasilitas'	=>$this->r($_POST["fasilitas"]),
					'jaringan'	=>$this->r($_POST["jaringan"]),
					'keahlian'	=>$this->r($_POST["keahlian"]),
					'divisi1'	=>$this->r($_POST["divisi1"]),
					'alasan1'	=>$this->r($_POST["alasan1"]),
					'divisi2'	=>$this->r($_POST["divisi2"]),
					'alasan2'	=>$this->r($_POST["alasan2"]),
					'motivasi'	=>$this->r($_POST["motivasi"]),
					'inovasi'	=>$this->r($_POST["inovasi"]),
					'fak'	=>$this->r(getStr($_POST["fakultas"]))


				);
				$where = array (
					"NIM" => $_POST["NIM"]
				);
				$res=$this->m_staffmuda->updateData('oprecstaff',$updatean, $where);
				if($res>=1){
					redirect('staffmuda');
				}else{
					echo "<h2>Gagal Dimasukkan</h2>";
				}
			}else{
				redirect('login');
			}	
		}

		public function getnim(){
			echo "<img src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=165150401111060'>";
		}

	public function screening($nim){
		$updatean = array(
 		"keterangan" => "sudah screening"
		);
		$where = array (
			"NIM" => $nim
		);
	 	$nim = "where nim = '$nim'";
	 	$this->M_staffmuda->updateData('oprecstaff',$updatean,$where);
		$result = $this->M_staffmuda->getX("*",'oprecstaff',$nim);
		echo json_encode($result);
	 }

		public function logout(){
			session_destroy();
			redirect('login');
		}


	}