<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Document_Model extends CI_Model {

    public $tableName = 'fichier';


    /**
	 *	Récupère toutes les données dans la base de données.
	 */
	public function getAll()
	{
        $result = $this->db->select('id_fichier, nom, taille, format, date')->get($this->tableName)->result_array();
		return $result;
	}


	public function insert($data)
	{
		$this->db->insert($this->tableName, $data);
	}


}

/* End of file Document_Model.php */
