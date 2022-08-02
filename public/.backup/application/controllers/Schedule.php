<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Lomba');
	}
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nim = $this->input->post('nim');
		$now = new DateTime();
		$waktu =$now->format('Y-m-d');
		$result = $this->Lomba->jadwalByWaktu($waktu);
		$this->load->view('2019/web/templates/head.php');
		$this->load->view('2019/web/jadwal.php',$result);
		$this->load->view('2019/web/templates/foot.php');
	}
	public function coba()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nim = $this->input->post('nim');
		$now = new DateTime();
		$waktu =$now->format('Y-m-d');
		$result = $this->Lomba->jadwalByWaktu($waktu);
		// $this->load->view('web/jadwal.php');
		var_dump($result);
	}
}
