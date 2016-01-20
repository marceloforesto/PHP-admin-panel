<?php

class Dashboard_model extends CI_Model {
	function update_title($id_value, $data) {
		$data = array(
               'data' => $data
        );
		$this->db->where('id', $id_value);
		$this->db->update('title', $data);
	}

	function update_text($id_value, $data) {
		$data = array(
               'data' => $data
        );
		$this->db->where('id', $id_value);
		$this->db->update('text', $data);
	}

	function update_image($id_value, $url) {
		$this->db->where('id', $id_value);
		$this->db->set('data', $url);
		$this->db->update('image');
	}
}