<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Analyse extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
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
        $this->load->view('Analyse');
        $this->load->view('shared/footer');
    }


    
    public function getData()
    {


        $iTotalRecords = 178;
        
        $iDisplayLength = intval($this->input->post('length'));
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength; 
        $iDisplayStart = intval($this->input->post('start'));
        $sEcho = intval($this->input->post('draw'));
        
        $records = array();
        $records["data"] = array(); 

        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;

        $status_list = array(
            array("success" => "Pending"),
            array("info" => "Closed"),
            array("danger" => "On Hold"),
            array("warning" => "Fraud")
        );

        for($i = $iDisplayStart; $i < $end; $i++) {
            $status = $status_list[rand(0, 2)];
            $id = ($i + 1);
            $records["data"][] = array(
            '<input type="checkbox" name="id[]" value="'.$id.'">',
            $id,
            '12/09/2013',
            'Jhon Doe',
            'Jhon Doe',
            '450.60$',
            rand(1, 10),
            '<span class="label label-sm label-'.(key($status)).'">'.(current($status)).'</span>',
            '<a href="javascript:;" class="btn btn-sm btn-outline grey-salsa"><i class="fa fa-search"></i> View</a>',
        );
        }

        $c = $this->input->post("customActionType");
        if (isset($c) && $this->input->post("customActionType") == "group_action") {
            $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
            $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
        }

        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;
        
        echo json_encode($records);
    }


}

/* End of file Analyse.php */
