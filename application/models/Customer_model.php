<?php
class Customer_model extends CI_Model
{

	public function showdata()
	{
		$query = $this->db->get('customer');
		return $query->result();
	}

	public function read($id) // select data by id
	{
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('id', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data;
		} else {
			return false;
		}
	}
}