<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('Berita');
	}

	public function index()
	{
		redirect('news/page/');
	}

	public function page()
	{
		$jumlah_data = $this->Berita->jumlah_data();
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		$config['base_url'] = base_url() . 'news/page/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$result['data'] = $this->Berita->data($config['per_page'], $from);
		$this->load->view('2019/web/templates/head.php');
		$this->load->view('2019/web/berita.php', $result);
		$this->load->view('2019/web/templates/foot.php');
	}


	public function detail($key)
	{
		$result = $this->Berita->getBerita($key);
		if ($result['status'] == true) {
			$this->load->view('2019/web/templates/head.php');
			$this->load->view('2019/web/detail_berita.php', $result);
			$this->load->view('2019/web/templates/foot.php');
		} else {
			redirect('news/');
		}
	}
}
