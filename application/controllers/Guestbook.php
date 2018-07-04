<?php
class Guestbook extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('entry_model');
        $this->load->helper('url');
   }

    public function index() {
        $data['entries'] = $this->entry_model->get_entries();

        $this->load->view('templates/header');
        $this->load->view('guestbook/index', $data);
        $this->load->view('templates/footer');
    }

    public function newEntry() {

        $this->load->helper('form');
        $this->load->library('form_validation');

	$this->form_validation->set_rules('author', 'Author', 'required');
    	$this->form_validation->set_rules('text', 'Text', 'required');

    	if ($this->form_validation->run() === FALSE) {
		$this->load->view('templates/header');
		$this->load->view('guestbook/newEntry');
		$this->load->view('templates/footer');
	} else {
		$this->entry_model->add_entry();
		$this->index();
	}
    }
}
