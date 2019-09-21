<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('shared/header');
        $this->load->view('shared/menu');
        $this->load->view('Dashboard');
        $this->load->view('shared/footer');
    }

}

/* End of file Dashboard.php */
?>