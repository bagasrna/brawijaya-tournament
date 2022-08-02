<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_staffmuda extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getX($order,$table,$where)
	{
		$sql = "SELECT $order FROM `$table` $where";
		$data= $this->db->query($sql);
		return $data->result_array();
	}

	public function insertData($table,$data){
		$res=$this->db->insert($table,$data);
		return $res;
	}
  
 	 public function updateData($table,$data,$where){
		$res= $this->db->update($table,$data,$where);
		return $res;
	}

	public function deleteData($table,$where){
		$res= $this->db->delete($table,$where);
		return $res;
	}
}
?>
