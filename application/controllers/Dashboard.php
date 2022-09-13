<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model');

		//print_r($_SESSION);  view data in session

		if (!isset($_SESSION['member'])) { // check user is logged in and redirect
			redirect('login', 'refresh');
		}
	}

	public function index()
	{

		$data['query'] = $this->customer_model->showdata();


		$this->load->view('dashboard_css');
		$this->load->view('dashboard_view', $data);
		$this->load->view('dashboard_js');
	}

	public function edit($id)
	{

		$data['query'] = $this->customer_model->read($id);


		$this->load->view('dashboard_css');
		$this->load->view('profile_edit', $data);
		$this->load->view('dashboard_js');
	}

	public function delete($id)
	{

		$this->db->delete('customer', array('id' => $id)); // delete data by calling cus model
		redirect('', 'refresh');
		// echo ' <script> location.href = "https://myinterviewexercise.000webhostapp.com/"; </script>';
	}

	public function logout()
	{
		// Waring try unset session
		unset($_SESSION['member']);

		//
		if (isset($_SESSION['member'])) {
			# code...
			unset($_SESSION['member']);

			// print_r($_SESSION);
		} else {

			echo ' session has been successfully deleted';
			echo ' <script> location.reload(); </script>';
		}



		echo ' <script> location.reload(); </script>';
	}
}