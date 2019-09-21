<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Document_Model');
        $this->load->helper('date');
        $this->load->helper(array('form', 'url'));
        if(!$this->session->userdata('logged_in')){
            redirect('/Auth');
        }
    }
    
    public function index()
    {
        $session = $this->session->userdata('logged_in');
        $data['username'] = $session['username'];
		$this->load->view('shared/header');
        $this->load->view('shared/menu', $data);
        $this->load->view('Document');
        $this->load->view('shared/footer',$data);
    }

    public function docList()
    {
       $data = $this->Document_Model->getAll();
       echo json_encode(array('data'=>$data));
    }

    public function nouveau()
    {
        $session = $this->session->userdata('logged_in');
        $data['username'] = $session['username'];
		$this->load->view('shared/header');
        $this->load->view('shared/menu', $data);
        $this->load->view('Nouveau_document');
        $this->load->view('shared/footer',$data);
    }

    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $r = $this->upload->do_upload('docFile');
        $info = $this->upload->data(); 
        $data = array(
            'id_fichier' => 2,
            'taille' => $info['file_size'],
            'format' => $info['file_type'],
            'date' => date(DATE_W3C, time()),
            'chemin' => $info['orig_name']
        );
        // var_dump($data);
        $this->Document_Model->insert($data);
        // if ( ! $this->upload->do_upload('docFile'))
        // {
        //         $error = array('error' => $this->upload->display_errors());
        //         $this->load->view('upload_form', $error);
        // }
        // else
        // {
        //         $data = array('upload_data' => $this->upload->data());

        //         $this->load->view('upload_success', $data);
        // }
    }
}

/* End of file Document.php */
