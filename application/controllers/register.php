<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // $this->load->library('form_validation');
    // $this->form_validation->set_rules('username', 'Username', 'trim|required');
    // $this->form_validation->set_rules('password', 'Password', 'trim|required');
    $this->load->view('view_register');
  }

}

/* End of file register.php */
/* Location: ./application/controllers/register.php */