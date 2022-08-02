<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Panitia');
	}
	public function index()
	{
        $data = $this->Panitia->getPanitiaAll();
        // var_dump($data);
		$this->load->view('promosi/promosi.php',$data);
	}
}
