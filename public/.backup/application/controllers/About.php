<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$this->load->view('2019/web/templates/head.php');
		$this->load->view('2019/web/about.php');
		$this->load->view('2019/web/templates/foot.php');
	}
}
