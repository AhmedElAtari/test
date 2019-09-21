<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Station_Model extends CI_Model {

	public $tableName = 'station';

	/**
	 *	Insère une nouvelle ligne dans la base de données.
	 */
	public function insert()
	{
		
	}

	/**
	 *	Récupère toutes les données dans la base de données.
	 */
	public function getAll()
	{
		$result = $this->db->get($this->tableName);
		return $result;
	}
	
	/**
	 *	Modifie une ou plusieurs lignes dans la base de données.
	 */
	public function update()
	{	
		// $this->db->get($this->tableName, $data, 'stat');
		}
		
	/**
	 *	Supprime une ou plusieurs lignes de la base de données.
	 */
	public function delete($stationID)
	{
		// $this->db->where('id', 1);
        // $this->db->delete('orders');
	}

	/**
	 *	Retourne le nombre de résultats.
	 */
	public function count()
	{
		
	}
}
