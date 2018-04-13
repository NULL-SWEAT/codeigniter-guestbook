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

    public function new_entry() {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->view('templates/header');
        $this->load->view('guestbook/new_entry');
        $this->load->view('templates/footer');
    }
}