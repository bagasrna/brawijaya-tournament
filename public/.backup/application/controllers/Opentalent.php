<?php
defined('BASEPATH') or exit('No direct script access allowed');

class opentalent extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('opentalent_model');
	}

	public function index()
	{
		session_destroy();
		$this->load->view('opentalent/templates/header');
		$this->load->view('opentalent/index');
		$this->load->view('opentalent/templates/footer');
	}

	public function leaders()
	{
		$data['title'] = 'Daftar Leader Open Talent';
		$data['leader'] = $this->opentalent_model->getAllLeader();
		$this->load->view('opentalent/templates/header', $data);
		$this->load->view('opentalent/list', $data);
		$this->load->view('opentalent/templates/footer');
	}

	public function members($id)
	{
		$data['title'] = 'Members';
		$data['leader'] = $this->opentalent_model->getLeaderById($id);
		$data['members'] =  $this->opentalent_model->getAllMembers($id);
		$this->load->view('opentalent/templates/header', $data);
		$this->load->view('opentalent/members', $data);
		$this->load->view('opentalent/templates/footer');
	}

	public function reg($id)
	{
		if (!isset($_SESSION['log'])) {
			$_SESSION['url'] = current_url();
			$_SESSION['fixedUrl'] = $_SESSION['url'];
			redirect('opentalent/log');
		}
		$data['title'] = 'Registration';
		$data['talents'] = $this->opentalent_model->getAllTalent();
		$data['selectedTalent'] = $this->opentalent_model->getTalentById($id);
		$this->form_validation->set_rules('namaTeam', 'Nama Team', 'required|trim');
		$this->form_validation->set_rules('teamLeader', 'Nama Team Leader', 'required|trim');
		$this->form_validation->set_rules('nimLeader', 'Nim Leader', 'required|trim|is_unique[ot_member.nim_member]|min_length[15]|max_length[15]|callback_nim_check', [
			'is_unique' => 'This NIM has already registered!'
		]);
		$this->form_validation->set_rules('lineLeader', 'ID Line Leader', 'required|trim');
		$this->form_validation->set_rules('noHpLeader', 'No HP Leader', 'required|trim');
		$this->form_validation->set_rules('linkVideo', 'Link Video', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('opentalent/templates/header', $data);
			if ($id == 2) {
				$this->load->view('opentalent/registSoloVocal', $data);
			} else {
				$this->load->view('opentalent/regist', $data);
			}
			$this->load->view('opentalent/templates/footer');
		} else {
			$this->upload_image();
		}
	}

	public function login()
	{
		$nim = $this->input->post('nim');
		$pw = $this->input->post('password');
		$dt = "https://em.ub.ac.id/redirect/login/loginApps/?nim=" . $nim . "&password=" . $pw;
		$data = file_get_contents($dt);
		$dataMhs = json_decode($data);
		if ($dataMhs->status) {
			$_SESSION["nim"] = $dataMhs->nim;
			$_SESSION["nama"] = $dataMhs->nama;
			$_SESSION['log'] = true;
			redirect($_SESSION['fixedUrl']);
		} else {
			redirect('opentalent/log');
		}
	}

	public function log()
	{
		$this->load->view('opentalent/login');
	}

	public function nim_check($nim)
	{
		$angkatan = substr($nim, 0, 2);
		if ($angkatan < 12 || $angkatan > 19) {
			$this->form_validation->set_message('nim_check', 'Maaf NIM Anda Tidak Terdaftar Atau Anda Tidak Diijinkan Untuk Mendaftar Open Talent');
			return false;
		} else {
			return true;
		}
	}

	public function addMembers()
	{
		if (!isset($_SESSION['id_team'])) {
			redirect('opentalent/index');
		}

		$data['title'] = 'Form Tambah Member';
		$data['talents'] = $this->opentalent_model->getAllTalent();
		$data['leader'] = $this->opentalent_model->getLeaderById($_SESSION['id_team']);
		$this->form_validation->set_rules('teamMember[]', 'Nama Team Member', 'required|trim');
		$this->form_validation->set_rules('nimMember[]', 'Nim Member', 'required|trim|is_unique[ot_member.nim_member]|min_length[15]|max_length[15]', [
			'is_unique' => 'This NIM has already registered!'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('opentalent/templates/header', $data);
			$this->load->view('opentalent/addMember', $data);
			$this->load->view('opentalent/templates/footer');
		} else {
			$this->upload_member_batch();
			unset($_SESSION['id_team']);
			session_destroy();
		}
	}

	public function thanks()
	{
		$this->load->view('opentalent/templates/header');
		$this->load->view('opentalent/thanks');
		$this->load->view('opentalent/templates/footer');
	}

	public function upload_image()
	{
		$config['upload_path'] = './upload/ktm/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = 1024;
		$config['encrypt_name'] = TRUE;
		$this->upload->initialize($config);

		if (!empty($_FILES['ktmLeader']['name'])) {

			if ($this->upload->do_upload('ktmLeader')) {
				$gbr = $this->upload->data();

				$gambar = $gbr['file_name'];

				$idTeam = mt_rand(0, 500);

				$data = [
					'id_team' => $idTeam,
					'id_talent' => $this->input->post('talentOptions'),
					'nama_team' => $this->input->post('namaTeam'),
					'nama_leader' => $this->input->post('teamLeader'),
					'nim_leader' => $this->input->post('nimLeader'),
					'id_line' => $this->input->post('lineLeader'),
					'no_hp' => $this->input->post('noHpLeader'),
					'ktm' => $gambar,
					'link_video' => $this->input->post('linkVideo')
				];
				$dataMember = [
					'id_team' => $data['id_team'],
					'nama_member' => $this->input->post('teamLeader'),
					'nim_member' => $this->input->post('nimLeader'),
					'ktm' => $gambar
				];
				$this->opentalent_model->addLeader($data, $dataMember);
				$_SESSION['id_team'] = $data['id_team'];
				$_SESSION['id_talent'] = $data['id_talent'];
				if ($_SESSION['id_talent'] == 2) {
					redirect('opentalent/thanks');
				} else {
					redirect('opentalent/addMembers');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ukuran File Teralu Besar !</div>');
				redirect('opentalent/reg');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Foto Yang Diupload Kosong !</div>');
			redirect('opentalent/reg');
		}
	}

	public function upload_member()
	{
		$config['upload_path'] = './upload/ktm/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = 1024;
		$config['encrypt_name'] = TRUE;
		$this->upload->initialize($config);

		if (!empty($_FILES['ktmMember']['name'])) {

			if ($this->upload->do_upload('ktmMember')) {
				$gbr = $this->upload->data();

				$gambar = $gbr['file_name'];

				$data = [
					'id_team' => $_SESSION['id_team'],
					'nama_member' => $this->input->post('teamMember'),
					'nim_member' => $this->input->post('nimMember'),
					'ktm' => $gambar,
				];
				$this->opentalent_model->addMember($data);
				redirect('opentalent/index');
			} else {
				echo 'File Terlalu Besar';
			}
		} else {
			echo "Image yang diupload kosong";
		}
	}

	public function upload_member_batch()
	{
		$config['upload_path'] = './upload/ktm/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = 1024;
		$config['encrypt_name'] = TRUE;
		$this->upload->initialize($config);

		$files = $_FILES;
		$dataInfo = array();
		$cpt = count($_FILES['ktmMember']['name']);

		for ($i = 0; $i < $cpt; $i++) {
			$_FILES['file']['name'] = $files['ktmMember']['name'][$i];
			$_FILES['file']['type'] = $files['ktmMember']['type'][$i];
			$_FILES['file']['tmp_name'] = $files['ktmMember']['tmp_name'][$i];
			$_FILES['file']['error'] = $files['ktmMember']['error'][$i];
			$_FILES['file']['size'] = $files['ktmMember']['size'][$i];

			$this->upload->do_upload('file');
			array_push($dataInfo, $this->upload->data());
		}

		$idTeam = $_SESSION['id_team'];
		$namaMember = $this->input->post('teamMember');
		$nimMember = $this->input->post('nimMember');
		$data = [];

		$index = 0;
		foreach ($namaMember as $n) {
			array_push($data, [
				'id_team' => $idTeam,
				'nama_member' => $n,
				'nim_member' => $nimMember[$index],
				'ktm' => $dataInfo[$index]['file_name']
			]);
			$index++;
		}
		$this->opentalent_model->save_batch_member($data);
		redirect('opentalent/thanks');
	}
}
