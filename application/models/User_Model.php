<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

    public function login($data)
    {
        $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        }

        return false;
    }

    public function getInfoByUsername($username)
    {
        $this->db->select('*')->from('utilisateur')->where("username='".$username."'")->limit(1);
        $data = $this->db->get()->result_array()[0];
        return $data;
    }

}

/* End of file User.php */
