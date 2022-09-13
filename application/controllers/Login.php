<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');

		if (isset($_SESSION['member'])) {
			redirect(base_url(), 'refresh');
		}
	}

	public function index()
	{
		//set form rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');


		if ($this->form_validation->run() == false) {
			$this->load->view('login_view');
		} else {
			$result = $this->member_model->login($_POST); //calling model to login user
			if ($result) {
				$sess = array(
					'id' => $result->id,
					'username' => $result->username,
					'email' => $result->email,
					'phone' => $result->phone,
					'gender' => $result->gender,
					'age' => $result->age,
				);
				$this->session->set_userdata('member', $sess); //set session and refresh page
				// redirect(base_url(), 'refresh');
				echo ' <script> location.reload(); </script>';
			} else {

				echo '<script> alert("Incorrect username or password, please try again.") </script>';
				redirect('/login', 'refresh');
			}
		}
	}
}