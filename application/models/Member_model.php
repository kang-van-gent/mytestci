<?php
class Member_model extends CI_Model
{

	public function showdata() // select all data
	{
		$query = $this->db->get('member');
		return $query->result();
	}

	public function login($data) // select by username and password
	{
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('username', $data['username']);
		$this->db->where('password', sha1($data['password']));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data;
		} else {
			return false;
		}
	}

	public function addingMember($data) // adding member table
	{
		$indata = array(
			'username' => $data['username'],
			'email' => $data['email'],
			'age' => $data['age'],
			'phone' => $data['phone'],
			'gender' => $data['gender'],
			'password' => sha1($data['password']),
		);

		if (is_numeric($indata['phone'])) {
			# code...
			$query = $this->db->insert('member', $indata);

			if ($query) {
				return true;
			} else {
				return false;
			}
		} else {
			echo '<script> alert("Phone pattern must be number.") </script>';
			return false;
		}
	}

	public function checkMemberExits($data) // for checking member imformations is exit in database
	{

		# code..
		$indata = array(
			'username' => $data['username'],
			'email' => $data['email'],
			'age' => $data['age'],
			'phone' => $data['phone'],
			'gender' => $data['gender'],
			'password' => sha1($data['password']),
		);

		$username = $indata['username'];
		$email = $indata['email'];
		$phone = $indata['phone'];

		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('username = "' . $username . '" or email ="' . $email . '" or phone ="' . $phone . '"');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}