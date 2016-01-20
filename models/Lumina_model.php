<?php

class Lumina_model extends CI_Model {
	function get_title() {
		$this->db->from('title');
		$query = $this->db->get();
		return $query->result();
	}

	function get_image() {
		$this->db->from('image');
		$query2 = $this->db->get();
		return $query2->result();
	}

	function get_text() {
		$this->db->from('text');
		$query3 = $this->db->get();
		return $query3->result();
	}
}