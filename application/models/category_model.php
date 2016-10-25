<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

	protected $table = 'category';

	public function getAllTable() {

	    $query = $this->db->get($this->table);
	    
		return $query->result();
	}

	public function getQueryById($id = '') {
		$this->db->select('category')->where('id', $id);

		$query = $this->db->get($this->table);

		return $query->result();
	}

	public function addNewCategory($array) {
		$this->db->insert($this->table, $array);
	}
}
