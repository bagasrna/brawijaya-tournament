<?php
defined('BASEPATH') or exit('No direct script access allowed');

class opentalent_model extends CI_Model
{

	public function getAllLeader()
	{
		return $this->db->get('ot_leader')->result_array();
	}

	public function getLeaderById($id)
	{
		return $this->db->get_where('ot_leader', ['id_team' => $id])->row_array();
	}

	public function getAllMembers($id)
	{
		return $this->db->get_where('ot_member', ['id_team' => $id])->result_array();
	}

	public function getAllTalent()
	{
		return $this->db->get('ot_talent')->result_array();
	}

	public function addLeader($data, $dataMember)
	{
		$this->db->insert('ot_leader', $data);
		$this->db->insert('ot_member', $dataMember);
	}
	public function addMember($data)
	{
		$this->db->insert('ot_member', $data);
	}

	public function save_batch_member($data)
	{
		$this->db->insert_batch('ot_member', $data);
	}
}
