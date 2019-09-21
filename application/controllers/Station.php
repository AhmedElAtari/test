<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Station extends CI_Controller {


	public function index()
	{
		$this->load->model('Station_Model');
		$result = $this->Station_Model->getAll()->result_array();
		echo json_encode($result);
	}

}
