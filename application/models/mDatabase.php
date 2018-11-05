<?php

Class MDatabase extends CI_Model {
	public function get($table) {
		return $this->db->get($table);
	}
	public function get_where($table,$where) {
		return $this->db->get_where($table,$where);
	}
	public function update($table,$data,$where) {
		return $this->db->update($table,$data,$where);
	}
	public function insert($table,$data) {
		return $this->db->insert($table,$data);
	}
	public function delete($table,$where) {
		return $this->db->delete($table,$where);
	}
}

?>