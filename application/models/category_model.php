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

	public function getAllById($id = '') {
		$query = $this->db->where('id', $id)
			->get($this->table);

		$result = array();

		foreach ($query->result_array() as $val) {
			foreach ($val as $key => $value) {
				$result[$key] = $value;
			}			
		}

		return $result;
	}

	public function addNewCategory($array) {
		$this->db->insert($this->table, $array);
	}

	public function updateCategory($id, $update) {
		$this->db->where('id', $id)->update($this->table, $update);
	}

	public function deleteCategoryById($id) {
		$this->db->where('id', $id)->delete($this->table);
	}
}
