<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Classement extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Klasemen');
	}
	public function index()
	{
		$res = $this->Klasemen->getMedaliAll();
		$this->load->view('2019/web/templates/head.php');
		$this->load->view('2019/web/klasemen.php', $res);
		$this->load->view('2019/web/templates/foot.php');
	}

	public function detailClassement($idfakultas)
	{
		$res = $this->Klasemen->getMedaliFakultas($idfakultas);
		$this->load->view('2019/web/templates/head.php');
		$this->load->view('2019/web/detail_klasemen.php', $res);
		$this->load->view('2019/web/templates/foot.php');
	}
}
