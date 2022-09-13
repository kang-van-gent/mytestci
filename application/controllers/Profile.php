<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model');

		if (!isset($_SESSION['member'])) {
			redirect('login', 'refresh');
		}
	}

	public function index()
	{

		$this->load->view('dashboard_css');
		$this->load->view('profile');
		$this->load->view('dashboard_js');
	}

	public function adding()
	{

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]|max_length[10]');

		if ($this->form_validation->run() == false) {

			$this->load->view('dashboard_css');
			$this->load->view('profile');
			$this->load->view('dashboard_js');
		} else {
			$data = array(
				'name' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'gender' => $this->input->post('gender')
			);
			if (is_numeric($data['phone'])) { // Check teltphone pattern is Number 

				$query = $this->db->insert('customer', $data);

				if ($query) {
					// Waring try using Sweet alert === not working yet
					// echo '<script>swal("Good job!", "You clicked the button!", "success");</script>';
					// $this->session->set_flashdata('flush', true);

					echo ' <script> location.replace(""); </script>';
				} else {
					// error while inserting data
					echo '<script> alert("Something went wrong, please try again later.") </script>';
				}
			} else {
				echo '<script> alert("Phone pattern must be number.") </script>';
				$this->index();
			}
		}
	}

	public function update()
	{

		$data = array(
			'name' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'gender' => $this->input->post('gender')
		);

		if (is_numeric($data['phone'])) {
			# code...
			$this->db->where('id', $this->input->post('id'));

			$query = $this->db->update('customer', $data);
			if ($query) {
				echo 'success';
				redirect(base_url(), 'refresh');
			} else {
				echo '<script> alert("Something went wrong, please try again later.") </script>';
			}
		} else {
			echo '<script> alert("Phone pattern must be number.") </script>';
			$this->index();
		}
	}
}