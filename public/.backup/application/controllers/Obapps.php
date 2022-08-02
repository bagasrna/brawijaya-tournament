<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();
class Obapps extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (isset($_SESSION["nim"])){
		}
		else{
			session_destroy(); 
				redirect(base_url().'login/');
		}
		$this->load->helper(array('form', 'url'));
		$this->load->model('Berita');
		$this->load->model('Klasemen');
		$this->load->model('Lomba');
	}
	public function index()
	{
		$this->load->view('obapps/index');
	}
	
	public function hari_ini(){
		date_default_timezone_set('Asia/Jakarta');
		$now = new DateTime();
		$waktu =$now->format('Y-m-d');
		$result = $this->Lomba->jadwalByWaktu($waktu);
		$this->load->view('obapps/home',$result);
	}

	public function berita(){
		$result = $this->Berita->beritaAll();
		$this->load->helper('text');
		$this->load->view('obapps/berita',$result);
	}

	public function detail($key){
		$result = $this->Berita->getBerita($key);
		if ($result['status']==true) {
			$this->load->view('obapps/berita_open.php',$result);
		}else{
			redirect('obapps/berita/');
		}
	}

	public function klasemen(){
		$res = $this->Klasemen->getMedaliAll();
		$this->load->view('obapps/klasemen',$res);
	}

	public function klasemennya(){
		$fakultas= $this->input->get('fak');
		$res = $this->Klasemen->getMedaliFakultas($fakultas);
		$this->load->view('obapps/klasemen_open',$res);
	}

	public function ketentuan(){
		$this->load->view('obapps/ketentuan');
	}
	public function jadwal(){
		date_default_timezone_set('Asia/Jakarta');
		$now = new DateTime();
		$waktu =$now->format('Y-m-d');
		$result = $this->Lomba->jadwalByWaktu($waktu);
		$this->load->view('obapps/jadwal',$result);
	}
	public function fakultas_saya(){
		$fakultas = 'FILKOM';
		$result = $this->Lomba->jadwalByFakultas($fakultas);
		$this->load->view('obapps/fakultas_saya',$result);
	}
	public function fakultas_lain(){
		$fakultas = $fakultasLain;
		$result = $this->Lomba->jadwalByFakultas($fakultas);
		$this->load->view('obapps/fakultas_lain',$result);
	}
	public function hasil_pertandingan(){
		$this->load->view('obapps/hasil_pertandingan_3');
	}
	public function hasil_pertandingan2(){
		$this->load->view('obapps/hasil_pertandingan_2');
	}
	public function hasil_pertandingan3(){
		$this->load->view('obapps/hasil_pertandingan');
	}
	public function favorit(){
		$this->load->view('obapps/favorit');
	}
	public function profil(){
		$this->load->view('obapps/profil');
	}
}
