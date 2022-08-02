<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('2019/web/templates/head.php');
		$this->load->view('2019/web/index.php');
		$this->load->view('2019/web/templates/foot.php');
	}
}
