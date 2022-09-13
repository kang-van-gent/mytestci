<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View extends CI_Controller
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
		$this->load->view('dashboard_css');
		$this->load->view('profile_view');
		$this->load->view('dashboard_js');
	}
}