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
		$this->load->view('templates/header');
		$this->load->view('opentalent/index');
		$this->load->view('templates/footer');
	}

	public function leaders()
	{
		$data['title'] = 'Daftar Leader Open Talent';
		$data['leader'] = $this->opentalent_model->getAllLeader();
		$this->load->view('templates/header', $data);
		$this->load->view('opentalent/list', $data);
		$this->load->view('templates/footer');
	}

	public function members($id)
	{
		$data['title'] = 'Members';
		$data['leader'] = $this->opentalent_model->getLeaderById($id);
		$data['members'] =  $this->opentalent_model->getAllMembers($id);
		$this->load->view('templates/header', $data);
		$this->load->view('opentalent/members', $data);
		$this->load->view('templates/footer');
	}

	public function reg()
	{
		$data['title'] = 'Registration';
		$data['talents'] = $this->opentalent_model->getAllTalent();
		$this->form_validation->set_rules('nimLeader', 'Nim Leader', 'required|trim|is_unique[ot_member.nim_member]|min_length[15]|max_length[15]|callback_nim_check', [
			'is_unique' => 'This NIM has already registered!'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('opentalent/regist', $data);
			$this->load->view('templates/footer');
		} else {
			$this->upload_image();
		}
	}

	public function nim_check($nim)
	{
		$angkatan = substr($nim, 0, 2);
		if ($angkatan < 12 || $angkatan > 18) {
			$this->form_validation->set_message('nim_check', 'Bukan anak UB ye kon ');
			return false;
		} else {
			return true;
		}
	}

	public function wantAddMember()
	{
		$data['title'] = 'Tambahkan Member ?';
		$this->load->view('templates/header', $data);
		$this->load->view('opentalent/wantAdd');
		$this->load->view('templates/footer');
	}

	public function addMembers()
	{
		$data['title'] = 'Form Tambah Member';
		$data['talents'] = $this->opentalent_model->getAllTalent();
		$data['leader'] = $this->opentalent_model->getLeaderById($this->session->userdata('idTeam'));
		$this->form_validation->set_rules('nimMember[]', 'Nim Member', 'required|trim|is_unique[ot_member.nim_member]|min_length[15]|max_length[15]', [
			'is_unique' => 'This NIM has already registered!'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('opentalent/addMember', $data);
			$this->load->view('templates/footer');
		} else {
			$this->upload_member_batch();
		}
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
				];
				$dataMember = [
					'id_team' => $data['id_team'],
					'nama_member' => $this->input->post('teamLeader'),
					'nim_member' => $this->input->post('nimLeader'),
					'ktm' => $gambar
				];
				$this->opentalent_model->addLeader($data, $dataMember);
				$this->session->set_userdata('idTeam', $data['id_team']);
				redirect('opentalent/wantAddMember');
			} else {
				echo 'File Terlalu Besar';
			}
		} else {
			echo "Image yang diupload kosong";
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
					'id_team' => $this->session->userdata('idTeam'),
					'nama_member' => $this->input->post('teamMember'),
					'nim_member' => $this->input->post('nimMember'),
					'ktm' => $gambar,
				];
				$this->opentalent_model->addMember($data);
				$this->session->sess_destroy();
				redirect('opentalent/leaders');
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

		if (!empty($_FILES['ktmMember']['name'])) {

			if ($this->upload->do_upload('ktmMember')) {
				$gbr = $this->upload->data();

				$gambar = $gbr['file_name'];

				$data = [];
				$index = 0;

				$idTeam = $this->session->userdata('idTeam');
				$namaMember = $this->input->post('teamMember');
				$nimMember = $this->input->post('nimMember');
				$ktm = $gambar;

				foreach ($namaMember as $n) {
					array_push($data, [
						'id_team' => $idTeam,
						'nama_member' => $n,
						'nim_member' => $nimMember[$index],
						'ktm' => $ktm[$index]
					]);
					$index++;
				}

				$this->opentalent_model->save_batch_member($data);
				$this->session->sess_destroy();
				redirect('opentalent/leaders');
			} else {
				echo 'File Terlalu Besar';
			}
		} else {
			echo "Image yang diupload kosong";
		}
	}
}
