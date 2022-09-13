<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
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
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register_view');
		} else {

			// checking data in $_POST
			// echo '<pre>';
			// print_r($_POST);
			// echo '</pre>';
			// exit;

			$isExit = $this->member_model->checkMemberExits($_POST); // Checkig is member is exits in database
			if ($isExit) {

				echo '<script> alert("This member is already exits, please try again.") </script>';
				redirect('/register', 'refresh');
			} else {
				$result = $this->member_model->addingMember($_POST); // adding data by calling member model

				if ($result) {
					# code...
					redirect('/login', 'refresh');
				} else {
					echo '<script> alert("Something went wrong, please try again later.") </script>';
					redirect('/register', 'refresh');
				}
			}
		}
	}
}