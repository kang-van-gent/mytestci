<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();


		if (!isset($_SESSION['member'])) {
			redirect('login', 'refresh');
		}
	}
	public function index()
	{
		$this->load->view('dashboard_css');
		$this->load->view('profile_edit');
		$this->load->view('dashboard_js');
	}
}