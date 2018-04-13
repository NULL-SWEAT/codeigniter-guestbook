<?php
class Entry_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_entries() {

        $query = $this->db->get('entry');
        return $query->result_array();

    }
}