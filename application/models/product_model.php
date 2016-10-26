<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

	protected $table = 'product';

	public function getAllTable() {
		$this->db->select('id, product, category_id, weight, color, price, image, sale')
	    	->where('available', 1);

	    $query = $this->db->get($this->table);
	    
		return $query->result();
	}

	public function getElementById($id) {
		$this->db->where('id', $id);

		$query = $this->db->get($this->table)->result();

		return $query;
	}

	public function deleteProductById($id) {
		$this->db->where('id', $id)
			->delete($this->table);
	}

	public function addNewProduct($array) {
		$this->db->insert($this->table, $array);
	}

	public function updateThisProduct($id, $update) {
		$this->db->where('id', $id)->update($this->table, $update);
	}
}
