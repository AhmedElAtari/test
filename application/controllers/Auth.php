<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_Model');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('form');
	}


	public function index()
	{
		$this->load->view('login');
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->load->view('login');
	}

	public function login()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		$check = $this->User_Model->login($data);

		if ($check == TRUE) {
			$username = $this->input->post('username');
			$result = $this->User_Model->getInfoByUsername($username);
			if ($result) {
				$session_data = array(
					'username' => $result['username']
				);
				$this->session->set_userdata('logged_in', $session_data);
				redirect('Analyse');
			}
		} else {
			$data = array(
				'error_message' => "Le nom d'utilisateur ou le mot de passe n'est pas valide"
			);
			$this->load->view('login', $data);
		}
	}
}
