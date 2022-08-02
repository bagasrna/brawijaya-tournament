<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'form';
		$this->form_validation->set_rules('teamLeader', 'TeamLeader', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('welcome_message', $data);
		} else {
			echo 'OK';
		}
	}
}
