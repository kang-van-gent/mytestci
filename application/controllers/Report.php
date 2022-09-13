<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('PDF');
		$this->load->model('customer_model');

		if (!isset($_SESSION['member'])) {
			redirect('login', 'refresh');
		}
	}

	public function index()
	{

		$data['query'] = $this->customer_model->showdata();

		$this->load->view('ex_pdf', $data);
	}
}