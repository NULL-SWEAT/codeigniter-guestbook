<?php
class Entry_model extends CI_Model {

    public function __construct() {
	    $this->load->database();
    }

    public function get_entries() {

        $query = $this->db->get('entry');
        return $query->result_array();

    }

    public function add_entry() {
	    $this->load->helper('url');

	    $data = array(
		'author' => $this->input->post('author'),
		'text' => $this->input->post('text')
	);
	    return $this->db->insert('entry', $data);
    }
}
