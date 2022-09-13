<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('customer_model');
		// echo json_encode($_SESSION);
		// $this->load->library('session');
		// print_r($_SESSION);

		if (!isset($_SESSION['member'])) {
			redirect('login', 'refresh');
			// echo ' <script> location.replace("login"); </script>';
		}
	}

	public function index()
	{
		$this->load->view('register');
	}
}